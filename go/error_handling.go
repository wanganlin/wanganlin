package main

import (
	"errors"
	"fmt"
	"os"
)

// 自定义错误
var ErrDivideByZero = errors.New("cannot divide by zero")

func divide(a, b int) (int, error) {
	if b == 0 {
		return 0, ErrDivideByZero
	}
	return a / b, nil
}

// 错误包装
func readFile(filename string) ([]byte, error) {
	data, err := os.ReadFile(filename)
	if err != nil {
		return nil, fmt.Errorf("read file %s: %w", filename, err)
	}
	return data, nil
}

// panic和recover
func safeDivide(a, b int) (result int) {
	defer func() {
		if r := recover(); r != nil {
			fmt.Println("Recovered from panic:", r)
			result = 0
		}
	}()
	if b == 0 {
		panic("division by zero")
	}
	return a / b
}

func main() {
	// 基本错误处理
	result, err := divide(10, 2)
	if err != nil {
		fmt.Println("Error:", err)
	} else {
		fmt.Println("Result:", result)
	}

	// 自定义错误
	_, err = divide(10, 0)
	if errors.Is(err, ErrDivideByZero) {
		fmt.Println("Custom error:", err)
	}

	// 错误包装
	_, err = readFile("nonexistent.txt")
	if err != nil {
		fmt.Println("Wrapped error:", err)
		fmt.Println("Unwrapped error:", errors.Unwrap(err))
	}

	// panic和recover
	fmt.Println("Safe divide:", safeDivide(10, 0))

	// defer和错误处理
	file, err := os.Open("test.txt")
	if err != nil {
		fmt.Println("Error opening file:", err)
		return
	}
	defer file.Close()

	// 模拟处理文件
	fmt.Println("File opened successfully")
}
