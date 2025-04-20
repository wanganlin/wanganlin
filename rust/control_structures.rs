fn main() {
    // 条件语句
    let number = 3;
    if number < 5 {
        println!("条件成立");
    } else {
        println!("条件不成立");
    }

    // 多条件判断
    if number % 4 == 0 {
        println!("能被4整除");
    } else if number % 3 == 0 {
        println!("能被3整除");
    } else {
        println!("不能被4或3整除");
    }

    // 循环结构 - loop
    let mut counter = 0;
    loop {
        counter += 1;
        if counter == 3 {
            println!("loop循环结束");
            break;
        }
    }

    // 循环结构 - while
    while counter < 5 {
        println!("while循环中: {}", counter);
        counter += 1;
    }

    // 循环结构 - for
    for i in 1..4 {
        println!("for循环: {}", i);
    }

    // 匹配表达式
    match number {
        1 => println!("匹配到1"),
        2 => println!("匹配到2"),
        3 => println!("匹配到3"),
        _ => println!("匹配到其他值"),
    }

    // 流程控制
    for i in 1..10 {
        if i % 2 == 0 {
            continue; // 跳过偶数
        }
        if i > 5 {
            break; // 大于5时退出循环
        }
        println!("奇数: {}", i);
    }

    // 模式匹配与守卫条件
    let pair = (0, -2);
    match pair {
        (x, y) if x == y => println!("x和y相等"),
        (x, y) if x + y == 0 => println!("x和y相加等于0"),
        _ => println!("其他情况"),
    }
}