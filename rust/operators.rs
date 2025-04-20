fn main() {
    // 算术运算符
    let a = 10;
    let b = 3;
    println!("a + b = {}", a + b);
    println!("a - b = {}", a - b);
    println!("a * b = {}", a * b);
    println!("a / b = {}", a / b);
    println!("a % b = {}", a % b);

    // 关系运算符
    println!("a == b: {}", a == b);
    println!("a != b: {}", a != b);
    println!("a > b: {}", a > b);
    println!("a < b: {}", a < b);
    println!("a >= b: {}", a >= b);
    println!("a <= b: {}", a <= b);

    // 逻辑运算符
    let x = true;
    let y = false;
    println!("x && y: {}", x && y);
    println!("x || y: {}", x || y);
    println!("!x: {}", !x);

    // 位运算符
    let c = 0b1010;
    let d = 0b1100;
    println!("c & d: {:b}", c & d);
    println!("c | d: {:b}", c | d);
    println!("c ^ d: {:b}", c ^ d);
    println!("c << 1: {:b}", c << 1);
    println!("c >> 1: {:b}", c >> 1);

    // 赋值运算符
    let mut e = 5;
    e += 2;
    println!("e += 2: {}", e);
    e -= 1;
    println!("e -= 1: {}", e);
    e *= 3;
    println!("e *= 3: {}", e);
    e /= 2;
    println!("e /= 2: {}", e);
    e %= 4;
    println!("e %= 4: {}", e);

    // 运算符优先级和结合性
    let result = a + b * c - d / e;
    println!("运算符优先级示例: {}", result);
}