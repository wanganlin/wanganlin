package main

import "fmt"
import "reflect"

func main() {
	// 基本数据类型
	var i int = 10
	var f float64 = 3.14
	var b bool = true
	var s string = "hello"
	var c complex128 = complex(1, 2)
	var by byte = 'A'
	var r rune = '中'

	// 复合数据类型
	var arr [3]int = [3]int{1, 2, 3}
	var sl []int = []int{4, 5, 6}
	var m map[string]int = map[string]int{"one": 1, "two": 2}
	var st struct{ x, y int } = struct{ x, y int }{x: 10, y: 20}
	var ptr *int = &i
	var ch chan int = make(chan int)
	var fn func() = func() { fmt.Println("function") }
	var iface interface{} = "interface"

	// 打印所有变量类型
	fmt.Println("int:", reflect.TypeOf(i))
	fmt.Println("float64:", reflect.TypeOf(f))
	fmt.Println("bool:", reflect.TypeOf(b))
	fmt.Println("string:", reflect.TypeOf(s))
	fmt.Println("complex128:", reflect.TypeOf(c))
	fmt.Println("byte:", reflect.TypeOf(by))
	fmt.Println("rune:", reflect.TypeOf(r))
	fmt.Println("array:", reflect.TypeOf(arr))
	fmt.Println("slice:", reflect.TypeOf(sl))
	fmt.Println("map:", reflect.TypeOf(m))
	fmt.Println("struct:", reflect.TypeOf(st))
	fmt.Println("pointer:", reflect.TypeOf(ptr))
	fmt.Println("channel:", reflect.TypeOf(ch))
	fmt.Println("function:", reflect.TypeOf(fn))
	fmt.Println("interface:", reflect.TypeOf(iface))

	// 类型转换示例
	var i2f float64 = float64(i)
	var f2i int = int(f)
	var i2s string = string(by)
	var s2b []byte = []byte(s)

	fmt.Println("int to float64:", i2f)
	fmt.Println("float64 to int:", f2i)
	fmt.Println("byte to string:", i2s)
	fmt.Println("string to []byte:", s2b)
}