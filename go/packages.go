package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"math"
	"net/http"
	"os"
	"strings"
	"time"
)

// 自定义包结构
type customPackage struct {
	Name    string
	Version string
}

func (p *customPackage) Info() string {
	return fmt.Sprintf("%s v%s", p.Name, p.Version)
}

func main() {
	// 使用标准库包
	fmt.Println("Using standard library packages:")
	fmt.Println("Square root of 16:", math.Sqrt(16))
	fmt.Println("Uppercase:", strings.ToUpper("hello"))
	fmt.Println("Current time:", time.Now())

	// 使用自定义包
	myPkg := customPackage{"myapp", "1.0.0"}
	fmt.Println("Custom package:", myPkg.Info())

	// 使用第三方包风格(模拟)
	fmt.Println("Simulating third-party package usage:")
	resp, err := http.Get("https://example.com")
	if err != nil {
		fmt.Println("HTTP error:", err)
		return
	}
	defer resp.Body.Close()
	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println("HTTP response length:", len(body))

	// 包初始化
	fmt.Println("Package initialization:")
	var config map[string]interface{}
	file, _ := os.Open("config.json")
	defer file.Close()
	decoder := json.NewDecoder(file)
	_ = decoder.Decode(&config)
	fmt.Println("Config:", config)
}
