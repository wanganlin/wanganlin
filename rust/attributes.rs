// 基本属性
#[derive(Debug)]
struct Point {
    x: i32,
    y: i32,
}

// 条件编译属性
#[cfg(target_os = "macos")]
fn print_os() {
    println!("Running on macOS");
}

// 警告控制属性
#[allow(unused_variables)]
fn unused_variable() {
    let x = 10;
}

// 测试属性
#[test]
fn test_addition() {
    assert_eq!(2 + 2, 4);
}

// 文档属性
/// 这是一个加法函数
/// # Examples
/// ```
/// let result = add(2, 3);
/// assert_eq!(result, 5);
/// ```
fn add(a: i32, b: i32) -> i32 {
    a + b
}

// 自定义属性（需要过程宏支持）
// #[my_custom_attribute]
// fn custom_attr_function() {}

fn main() {
    // 使用derive属性
    let point = Point { x: 10, y: 20 };
    println!("{:?}", point);

    // 使用cfg属性
    print_os();

    // 调用文档注释的函数
    println!("2 + 3 = {}", add(2, 3));
}