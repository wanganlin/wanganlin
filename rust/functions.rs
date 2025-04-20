fn main() {
    // 基本函数调用
    basic_function();
    
    // 带参数的函数
    print_sum(5, 3);
    
    // 返回值的函数
    let result = multiply(4, 5);
    println!("4 * 5 = {}", result);
    
    // 高阶函数
    let numbers = vec![1, 2, 3, 4, 5];
    let squares: Vec<_> = numbers.iter().map(|x| x * x).collect();
    println!("平方数: {:?}", squares);
    
    // 闭包
    let closure = |x| x + 1;
    println!("闭包结果: {}", closure(10));
    
    // 函数指针
    let func_ptr: fn(i32, i32) -> i32 = add;
    println!("函数指针结果: {}", func_ptr(2, 3));
    
    // 方法调用
    let rect = Rectangle { width: 10, height: 20 };
    println!("矩形面积: {}", rect.area());
    
    // 关联函数
    let square = Rectangle::square(5);
    println!("正方形面积: {}", square.area());
}

// 基本函数
fn basic_function() {
    println!("这是一个基本函数");
}

// 带参数的函数
fn print_sum(a: i32, b: i32) {
    println!("{} + {} = {}", a, b, a + b);
}

// 返回值的函数
fn multiply(a: i32, b: i32) -> i32 {
    a * b
}

// 函数指针示例
fn add(a: i32, b: i32) -> i32 {
    a + b
}

// 结构体和方法
struct Rectangle {
    width: u32,
    height: u32,
}

impl Rectangle {
    // 方法
    fn area(&self) -> u32 {
        self.width * self.height
    }
    
    // 关联函数
    fn square(size: u32) -> Self {
        Rectangle {
            width: size,
            height: size,
        }
    }
}