// 声明宏示例
macro_rules! say_hello {
    () => {
        println!("Hello!");
    };
}

// 带参数的声明宏
macro_rules! create_function {
    ($func_name:ident) => {
        fn $func_name() {
            println!("You called {:?}()", stringify!($func_name));
        }
    };
}

// 重复模式示例
macro_rules! print_all {
    ($($arg:tt),*) => {
        $(println!("{}", $arg);)*
    };
}

// 使用标准库中的宏
fn use_std_macros() {
    println!("Using println! macro");
    let v = vec![1, 2, 3];
    dbg!(v);
}

// 创建自定义函数
create_function!(foo);
create_function!(bar);

fn main() {
    // 使用各种宏
    say_hello!();
    foo();
    bar();
    print_all!(1, "two", 3.0);
    use_std_macros();

    // 宏卫生性示例
    macro_rules! hygiene_test {
        ($x:ident) => {
            let $x = 42;
        };
    }
    
    let x = 10;
    hygiene_test!(x);
    println!("x after macro: {}", x); // 仍然是10，因为宏引入的x是不同的
}