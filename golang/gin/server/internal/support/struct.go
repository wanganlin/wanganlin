package support

import (
	"fmt"
	"net/url"
	"reflect"
	"strings"
)

func StructToMapString(data any) map[string]string {
	v := reflect.ValueOf(data)
	if v.Kind() == reflect.Ptr {
		v = v.Elem()
	}

	result := make(map[string]string)
	t := v.Type()

	for i := 0; i < v.NumField(); i++ {
		field := v.Field(i)
		fieldType := t.Field(i)
		fieldName := fieldType.Tag.Get("json")
		fieldValue := field.Interface()
		if fieldName == "" {
			fieldName = fieldType.Name
		}
		isZero := reflect.DeepEqual(fieldValue, reflect.Zero(field.Type()).Interface())
		switch field.Kind() {
		case reflect.Ptr:
			if !field.IsNil() {
				result[fieldName] = fmt.Sprintf("%v", field.Elem().Interface())
			}
		case reflect.Struct:
			if !isZero {
				nestedMap := StructToMapString(fieldValue)
				for k, v := range nestedMap {
					result[fieldName+"."+k] = v
				}
			}
		case reflect.Slice:
			if !isZero {
				for j := 0; j < field.Len(); j++ {
					nestedMap := StructToMapString(field.Index(j).Interface())
					for k, v := range nestedMap {
						result[fmt.Sprintf("%s[%d].%s", fieldName, j, k)] = v
					}
				}
			}
		default:
			if !isZero {
				result[fieldName] = fmt.Sprintf("%v", fieldValue)
			}
		}
	}

	return result
}

func StructToQueryString(data any) string {
	v := reflect.ValueOf(data)
	if v.Kind() == reflect.Ptr {
		v = v.Elem()
	}

	params := url.Values{}
	t := v.Type()

	for i := 0; i < v.NumField(); i++ {
		field := v.Field(i)
		fieldType := t.Field(i)
		fieldName := fieldType.Tag.Get("json")
		if fieldName == "" {
			fieldName = fieldType.Name
		}
		switch field.Kind() {
		case reflect.Slice:
			for j := 0; j < field.Len(); j++ {
				sliceField := field.Index(j).Interface()
				nestedParams := StructToQueryString(sliceField)
				for _, nv := range strings.Split(nestedParams, "&") {
					nvPair := strings.SplitN(nv, "=", 2)
					if len(nvPair) == 2 {
						params.Add(fieldName+"[]", nvPair[1])
					}
				}
			}
		case reflect.Struct:
			nestedParams := StructToQueryString(field.Interface())
			for _, nv := range strings.Split(nestedParams, "&") {
				nvPair := strings.SplitN(nv, "=", 2)
				if len(nvPair) == 2 {
					params.Add(fieldName+"."+nvPair[0], nvPair[1])
				}
			}
		default:
			params.Add(fieldName, fmt.Sprintf("%v", field.Interface()))
		}
	}

	return params.Encode()
}

// MapToQueryString 转换map为查询字符串格式
func MapToQueryString(data map[string]any) string {
	params := url.Values{}

	var convert func(key string, value any)
	convert = func(key string, value any) {
		switch reflect.TypeOf(value).Kind() {
		case reflect.Slice:
			s := reflect.ValueOf(value)
			for i := 0; i < s.Len(); i++ {
				convert(key, s.Index(i).Interface())
			}
		case reflect.Map:
			m := reflect.ValueOf(value)
			for _, k := range m.MapKeys() {
				convert(fmt.Sprintf("%s.%s", key, k.String()), m.MapIndex(k).Interface())
			}
		default:
			params.Add(key, fmt.Sprintf("%v", value))
		}
	}

	for k, v := range data {
		convert(k, v)
	}

	return params.Encode()
}
