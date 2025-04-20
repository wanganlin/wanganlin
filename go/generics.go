package main

import "fmt"

// 泛型函数
func PrintSlice[T any](s []T) {
	for _, v := range s {
		fmt.Println(v)
	}
}

// 泛型结构体
type Stack[T any] struct {
	items []T
}

func (s *Stack[T]) Push(item T) {
	s.items = append(s.items, item)
}

func (s *Stack[T]) Pop() T {
	item := s.items[len(s.items)-1]
	s.items = s.items[:len(s.items)-1]
	return item
}

// 泛型接口
type Container[T any] interface {
	Add(item T)
	Get(index int) T
}

// 泛型约束
type Number interface {
	~int | ~float64
}

func Sum[T Number](nums []T) T {
	var total T
	for _, num := range nums {
		total += num
	}
	return total
}

func main() {
	// 使用泛型函数
	PrintSlice([]int{1, 2, 3})
	PrintSlice([]string{"a", "b", "c"})

	// 使用泛型结构体
	intStack := Stack[int]{}
	intStack.Push(1)
	intStack.Push(2)
	fmt.Println("Popped:", intStack.Pop())

	stringStack := Stack[string]{}
	stringStack.Push("hello")
	stringStack.Push("world")
	fmt.Println("Popped:", stringStack.Pop())

	// 使用泛型约束
	fmt.Println("Sum of ints:", Sum([]int{1, 2, 3}))
	fmt.Println("Sum of floats:", Sum([]float64{1.1, 2.2, 3.3}))
}
