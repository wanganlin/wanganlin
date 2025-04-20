package main

import (
	"fmt"
	"time"
)

func worker(id int, jobs <-chan int, results chan<- int) {
	for j := range jobs {
		fmt.Printf("worker %d started job %d\n", id, j)
		time.Sleep(time.Second)
		fmt.Printf("worker %d finished job %d\n", id, j)
		results <- j * 2
	}
}

func main() {
	// 基本goroutine
	go func() {
		fmt.Println("Hello from goroutine")
	}()
	time.Sleep(time.Second)

	// 无缓冲channel
	ch := make(chan string)
	go func() {
		ch <- "message"
	}()
	msg := <-ch
	fmt.Println("Received:", msg)

	// 缓冲channel
	bufferedCh := make(chan int, 2)
	bufferedCh <- 1
	bufferedCh <- 2
	fmt.Println("Buffered channel:", <-bufferedCh, <-bufferedCh)

	// 工作池模式
	jobs := make(chan int, 100)
	results := make(chan int, 100)

	for w := 1; w <= 3; w++ {
		go worker(w, jobs, results)
	}

	for j := 1; j <= 5; j++ {
		jobs <- j
	}
	close(jobs)

	for a := 1; a <= 5; a++ {
		<-results
	}

	// select语句
	c1 := make(chan string)
	c2 := make(chan string)

	go func() {
		time.Sleep(time.Second)
		c1 <- "one"
	}()

	go func() {
		time.Sleep(2 * time.Second)
		c2 <- "two"
	}()

	for i := 0; i < 2; i++ {
		select {
		case msg1 := <-c1:
			fmt.Println("received:", msg1)
		case msg2 := <-c2:
			fmt.Println("received:", msg2)
		}
	}

	// 关闭channel
	ch2 := make(chan int)
	go func() {
		for i := 0; i < 5; i++ {
			ch2 <- i
		}
		close(ch2)
	}()

	for i := range ch2 {
		fmt.Println("Range over channel:", i)
	}
}
