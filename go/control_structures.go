package main

import "fmt"

func main() {
	// if-else 结构
	x := 10
	if x > 5 {
		fmt.Println("x is greater than 5")
	} else {
		fmt.Println("x is 5 or less")
	}

	// switch 结构
	switch x {
	case 10:
		fmt.Println("x is 10")
	case 20:
		fmt.Println("x is 20")
	default:
		fmt.Println("x is neither 10 nor 20")
	}

	// for 循环
	fmt.Println("For loop:")
	for i := 0; i < 3; i++ {
		fmt.Println(i)
	}

	// while 循环 (Go 中没有 while 关键字，用 for 代替)
	fmt.Println("While loop:")
	j := 0
	for j < 3 {
		fmt.Println(j)
		j++
	}

	// 无限循环
	fmt.Println("Infinite loop (break after 1 iteration):")
	k := 0
	for {
		fmt.Println(k)
		k++
		if k >= 1 {
			break
		}
	}

	// range 循环
	fmt.Println("Range loop:")
	nums := []int{2, 3, 4}
	for i, num := range nums {
		fmt.Printf("%d: %d\n", i, num)
	}

	// defer 语句
	fmt.Println("Defer example:")
	defer fmt.Println("This will be printed last")
	fmt.Println("This will be printed first")

	// goto 语句
	fmt.Println("Goto example:")
	goto label
	fmt.Println("This will be skipped")
label:
	fmt.Println("This is the label")
}
