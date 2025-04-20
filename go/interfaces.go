package main

import "fmt"

// 基本接口
type Animal interface {
	Speak() string
}

// 实现接口的类型
type Dog struct{}

func (d Dog) Speak() string {
	return "Woof!"
}

type Cat struct{}

func (c Cat) Speak() string {
	return "Meow!"
}

// 空接口
type Any interface{}

// 接口嵌套
type AdvancedAnimal interface {
	Animal
	Run() string
}

type Horse struct{}

func (h Horse) Speak() string {
	return "Neigh!"
}

func (h Horse) Run() string {
	return "Galloping..."
}

// 类型断言
func describe(a Animal) {
	fmt.Printf("(%v, %T)\n", a, a)
}

func main() {
	// 基本接口使用
	var a Animal
	a = Dog{}
	fmt.Println(a.Speak())
	a = Cat{}
	fmt.Println(a.Speak())

	// 空接口
	var i Any
	i = 42
	fmt.Println("Integer:", i)
	i = "hello"
	fmt.Println("String:", i)

	// 接口嵌套
	var aa AdvancedAnimal = Horse{}
	fmt.Println(aa.Speak())
	fmt.Println(aa.Run())

	// 类型断言
	describe(Dog{})
	describe(Cat{})
	describe(Horse{})

	// 类型开关
	var x interface{} = 7
	switch v := x.(type) {
	case int:
		fmt.Printf("Integer: %v\n", v)
	case string:
		fmt.Printf("String: %v\n", v)
	default:
		fmt.Printf("Unknown type: %T\n", v)
	}
}
