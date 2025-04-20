package main

import "fmt"

// 使用常量模拟枚举
type Weekday int

const (
	Sunday Weekday = iota
	Monday
	Tuesday
	Wednesday
	Thursday
	Friday
	Saturday
)

func (d Weekday) String() string {
	return [...]string{"Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"}[d]
}

// 带值的枚举
type Direction int

const (
	North Direction = 1
	East  Direction = 2
	South Direction = 3
	West  Direction = 4
)

func (d Direction) String() string {
	switch d {
	case North:
		return "North"
	case East:
		return "East"
	case South:
		return "South"
	case West:
		return "West"
	default:
		return "Unknown"
	}
}

func main() {
	// 使用枚举
	today := Tuesday
	fmt.Println("Today is", today)

	// 遍历枚举
	fmt.Println("All weekdays:")
	for i := Sunday; i <= Saturday; i++ {
		fmt.Println(i)
	}

	// 带值的枚举
	myDirection := East
	fmt.Println("Direction:", myDirection)
}
