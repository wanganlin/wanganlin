package main

import (
	"fmt"
	"sync"
	"time"
)

func main() {
	// WaitGroup
	var wg sync.WaitGroup
	for i := 1; i <= 3; i++ {
		wg.Add(1)
		go func(id int) {
			defer wg.Done()
			fmt.Printf("Worker %d starting\n", id)
			time.Sleep(time.Second)
			fmt.Printf("Worker %d done\n", id)
		}(i)
	}
	wg.Wait()
	fmt.Println("All workers completed")

	// Mutex
	var counter int
	var mu sync.Mutex
	for i := 0; i < 5; i++ {
		wg.Add(1)
		go func() {
			defer wg.Done()
			mu.Lock()
			counter++
			mu.Unlock()
		}()
	}
	wg.Wait()
	fmt.Println("Counter:", counter)

	// RWMutex
	var rwMu sync.RWMutex
	var data int
	// 写操作
	wg.Add(1)
	go func() {
		defer wg.Done()
		rwMu.Lock()
		data = 42
		rwMu.Unlock()
	}()
	// 读操作
	wg.Add(1)
	go func() {
		defer wg.Done()
		rwMu.RLock()
		fmt.Println("Read data:", data)
		rwMu.RUnlock()
	}()
	wg.Wait()

	// Once
	var once sync.Once
	onceBody := func() {
		fmt.Println("Only once")
	}
	for i := 0; i < 3; i++ {
		once.Do(onceBody)
	}

	// Cond
	var m sync.Mutex
	c := sync.NewCond(&m)
	var ready bool
	wg.Add(1)
	go func() {
		defer wg.Done()
		time.Sleep(time.Second)
		c.L.Lock()
		ready = true
		c.Broadcast()
		c.L.Unlock()
	}()

	c.L.Lock()
	for !ready {
		fmt.Println("Waiting...")
		c.Wait()
	}
	fmt.Println("Condition met")
	c.L.Unlock()
	wg.Wait()

	// Pool
	var pool = sync.Pool{
		New: func() interface{} {
			return "new object"
		},
	}
	obj := pool.Get()
	fmt.Println("Pool object:", obj)
	pool.Put(obj)
}
