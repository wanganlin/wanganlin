fn main() {
    // 声明各种基本类型的变量
    let integer: i32 = 42;
    let float: f64 = 3.14;
    let boolean: bool = true;
    let character: char = 'R';
    let string: &str = "Hello, Rust!";
    let array: [i32; 3] = [1, 2, 3];
    let tuple: (i32, f64, char) = (10, 2.5, 'a');

    // 打印每个变量的类型
    println!("integer: {}", std::any::type_name::<i32>());
    println!("float: {}", std::any::type_name::<f64>());
    println!("boolean: {}", std::any::type_name::<bool>());
    println!("character: {}", std::any::type_name::<char>());
    println!("string: {}", std::any::type_name::<&str>());
    println!("array: {}", std::any::type_name::<[i32; 3]>());
    println!("tuple: {}", std::any::type_name::<(i32, f64, char)>());

    // 类型转换案例
    let int_to_float = integer as f64;
    let float_to_int = float as i32;
    let char_to_int = character as u32;
    let string_to_int = "42".parse::<i32>().unwrap();

    println!("\n类型转换结果:");
    println!("int_to_float: {}", int_to_float);
    println!("float_to_int: {}", float_to_int);
    println!("char_to_int: {}", char_to_int);
    println!("string_to_int: {}", string_to_int);
}