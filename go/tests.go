package main

import (
	"fmt"
	"os"
	"testing"
	"time"
)

// 基本测试
func TestAddition(t *testing.T) {
	result := 2 + 2
	expected := 4
	if result != expected {
		t.Errorf("Expected %d, got %d", expected, result)
	}
}

// 表格驱动测试
func TestSubtraction(t *testing.T) {
	tests := []struct {
		a, b     int
		expected int
	}{
		{5, 3, 2},
		{10, 7, 3},
		{0, 0, 0},
	}

	for _, tt := range tests {
		result := tt.a - tt.b
		if result != tt.expected {
			t.Errorf("%d - %d: expected %d, got %d", tt.a, tt.b, tt.expected, result)
		}
	}
}

// 基准测试
func BenchmarkFibonacci(b *testing.B) {
	for i := 0; i < b.N; i++ {
		fibonacci(20)
	}
}

func fibonacci(n int) int {
	if n < 2 {
		return n
	}
	return fibonacci(n-1) + fibonacci(n-2)
}

// 示例测试
func ExampleHello() {
	fmt.Println("Hello")
	// Output: Hello
}

// 子测试
func TestParallel(t *testing.T) {
	t.Run("subtest1", func(t *testing.T) {
		t.Parallel()
		time.Sleep(time.Second)
		t.Log("Subtest 1 done")
	})

	t.Run("subtest2", func(t *testing.T) {
		t.Parallel()
		time.Sleep(time.Second)
		t.Log("Subtest 2 done")
	})
}

// 测试帮助函数
func TestHelper(t *testing.T) {
	assertEqual(t, 4, 2+2)
}

func assertEqual(t *testing.T, a, b int) {
	t.Helper()
	if a != b {
		t.Fatalf("%d != %d", a, b)
	}
}

// 测试Main函数
func TestMain(m *testing.M) {
	// 测试前设置
	fmt.Println("Test setup")

	// 运行测试
	code := m.Run()

	// 测试后清理
	fmt.Println("Test teardown")

	// 退出
	os.Exit(code)
}
