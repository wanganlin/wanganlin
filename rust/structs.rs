// 基本结构体
struct Person {
    name: String,
    age: u32,
}

// 元组结构体
struct Point(i32, i32);

// 单元结构体
struct Empty;

// 带有泛型的结构体
struct Pair<T> {
    first: T,
    second: T,
}

// 结构体方法实现
impl Person {
    fn new(name: String, age: u32) -> Self {
        Person { name, age }
    }

    fn greet(&self) {
        println!("你好，我是{}，今年{}岁。", self.name, self.age);
    }
}

// 派生trait
#[derive(Debug)]
struct Rectangle {
    width: u32,
    height: u32,
}

fn main() {
    // 基本结构体使用
    let person = Person {
        name: String::from("张三"),
        age: 30,
    };
    person.greet();

    // 结构体更新语法
    let person2 = Person {
        name: String::from("李四"),
        ..person
    };
    person2.greet();

    // 元组结构体使用
    let point = Point(10, 20);
    println!("点坐标: ({}, {})", point.0, point.1);

    // 单元结构体使用
    let empty = Empty;
    println!("单元结构体占用空间: {}字节", std::mem::size_of_val(&empty));

    // 泛型结构体使用
    let pair = Pair { first: 1, second: 2 };
    println!("泛型结构体: ({}, {})", pair.first, pair.second);

    // 派生trait使用
    let rect = Rectangle {
        width: 30,
        height: 50,
    };
    println!("矩形: {:?}", rect);
}