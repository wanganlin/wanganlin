// 基本Result和Option处理
fn divide(a: i32, b: i32) -> Result<i32, String> {
    if b == 0 {
        Err(String::from("除数不能为零"))
    } else {
        Ok(a / b)
    }
}

fn find_index(value: i32, arr: &[i32]) -> Option<usize> {
    arr.iter().position(|&x| x == value)
}

// unwrap/expect用法
fn unwrap_example() {
    let result: Result<i32, &str> = Ok(42);
    println!("unwrap: {}", result.unwrap());
    
    let option: Option<i32> = Some(10);
    println!("expect: {}", option.expect("值不存在"));
}

// ?运算符
fn question_mark_operator() -> Result<i32, String> {
    let result = divide(10, 2)?;
    Ok(result + 5)
}

// 自定义错误类型
#[derive(Debug)]
struct MyError {
    message: String,
}

impl std::fmt::Display for MyError {
    fn fmt(&self, f: &mut std::fmt::Formatter) -> std::fmt::Result {
        write!(f, "{}", self.message)
    }
}

impl std::error::Error for MyError {}

fn custom_error() -> Result<(), MyError> {
    Err(MyError {
        message: String::from("自定义错误"),
    })
}

// 错误转换
fn error_conversion() -> Result<i32, Box<dyn std::error::Error>> {
    let num = "10a".parse::<i32>()?;
    Ok(num)
}

// panic!宏
fn panic_example() {
    // panic!("这是一个panic示例");
}

// catch_unwind
fn catch_unwind_example() {
    let result = std::panic::catch_unwind(|| {
        panic!("捕获的panic");
    });
    println!("catch_unwind结果: {:?}", result);
}

fn main() {
    // 基本错误处理
    match divide(10, 0) {
        Ok(result) => println!("结果: {}", result),
        Err(e) => println!("错误: {}", e),
    }

    // Option处理
    match find_index(3, &[1, 2, 3, 4]) {
        Some(index) => println!("找到索引: {}", index),
        None => println!("未找到"),
    }

    // unwrap/expect
    unwrap_example();
    
    // ?运算符
    match question_mark_operator() {
        Ok(result) => println!("?运算符结果: {}", result),
        Err(e) => println!("错误: {}", e),
    }

    // 自定义错误
    match custom_error() {
        Ok(_) => println!("成功"),
        Err(e) => println!("自定义错误: {}", e),
    }

    // 错误转换
    match error_conversion() {
        Ok(num) => println!("转换结果: {}", num),
        Err(e) => println!("转换错误: {}", e),
    }

    // panic
    // panic_example();
    
    // catch_unwind
    catch_unwind_example();
}