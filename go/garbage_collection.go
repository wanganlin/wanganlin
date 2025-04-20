package main

import (
	"fmt"
	"runtime"
	"time"
)

func printMemStats() {
	var m runtime.MemStats
	runtime.ReadMemStats(&m)
	fmt.Printf("Alloc = %v MiB\tTotalAlloc = %v MiB\tSys = %v MiB\tNumGC = %v\n",
		m.Alloc/1024/1024, m.TotalAlloc/1024/1024, m.Sys/1024/1024, m.NumGC)
}

func main() {
	// 打印初始内存状态
	fmt.Println("Initial memory stats:")
	printMemStats()

	// 分配大量内存
	var bigSlice [][]int
	for i := 0; i < 10; i++ {
		s := make([]int, 1000000)
		bigSlice = append(bigSlice, s)
		if i%2 == 0 {
			fmt.Printf("After allocation %d:\n", i+1)
			printMemStats()
		}
	}

	// 手动触发GC
	fmt.Println("\nBefore GC:")
	printMemStats()
	runtime.GC()
	fmt.Println("\nAfter GC:")
	printMemStats()

	// 释放引用，观察GC行为
	bigSlice = nil
	runtime.GC()
	time.Sleep(time.Second) // 给GC时间运行
	fmt.Println("\nAfter setting bigSlice to nil and GC:")
	printMemStats()

	// 演示内存泄漏
	fmt.Println("\nDemonstrating memory leak:")
	var leakySlice []*int
	for i := 0; i < 10; i++ {
		x := i
		leakySlice = append(leakySlice, &x)
		runtime.GC()
		fmt.Printf("After leak %d:\n", i+1)
		printMemStats()
		time.Sleep(500 * time.Millisecond)
	}
}
