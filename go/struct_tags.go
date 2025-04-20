package main

import (
	"encoding/json"
	"fmt"
)

// 基本结构体标签
type Person struct {
	Name string `json:"name"`
	Age  int    `json:"age"`
}

// 多个标签
type Book struct {
	Title  string `json:"title" xml:"title"`
	Author string `json:"author,omitempty"`
	Pages  int    `json:"-"`
}

// 自定义标签
type Config struct {
	Host string `env:"HOST" default:"localhost"`
	Port int    `env:"PORT" default:"8080"`
}

func main() {
	// JSON 序列化/反序列化
	p := Person{"Alice", 25}
	jsonData, _ := json.Marshal(p)
	fmt.Println("JSON:", string(jsonData))

	var p2 Person
	_ = json.Unmarshal([]byte(`{"name":"Bob","age":30}`), &p2)
	fmt.Println("Unmarshaled:", p2)

	// 忽略字段
	b := Book{"Go Programming", "", 300}
	bookJson, _ := json.Marshal(b)
	fmt.Println("Book JSON:", string(bookJson))

	// 模拟自定义标签处理
	fmt.Println("Simulating custom tag processing:")
	c := Config{}
	fmt.Printf("Host: %s (default: %s)\n", c.Host, "localhost")
	fmt.Printf("Port: %d (default: %d)\n", c.Port, 8080)
}
