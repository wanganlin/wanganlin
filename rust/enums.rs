// 基本枚举定义
enum BasicEnum {
    Variant1,
    Variant2,
    Variant3,
}

// 带数据的枚举
enum DataEnum {
    Unit,
    Tuple(i32, f64),
    Struct { x: i32, y: i32 },
}

// Option枚举示例
fn option_example() -> Option<i32> {
    Some(42)
}

// Result枚举示例
fn result_example() -> Result<i32, String> {
    Ok(42)
}

// 为枚举实现方法
impl BasicEnum {
    fn print(&self) {
        match self {
            BasicEnum::Variant1 => println!("Variant1"),
            BasicEnum::Variant2 => println!("Variant2"),
            BasicEnum::Variant3 => println!("Variant3"),
        }
    }
}

fn main() {
    // 基本枚举使用
    let basic = BasicEnum::Variant1;
    basic.print();

    // 带数据枚举使用
    let data = DataEnum::Struct { x: 10, y: 20 };
    match data {
        DataEnum::Unit => println!("Unit"),
        DataEnum::Tuple(x, y) => println!("Tuple: {}, {}", x, y),
        DataEnum::Struct { x, y } => println!("Struct: x={}, y={}", x, y),
    }

    // Option使用
    if let Some(value) = option_example() {
        println!("Option value: {}", value);
    }

    // Result使用
    match result_example() {
        Ok(value) => println!("Result value: {}", value),
        Err(e) => println!("Error: {}", e),
    }
}