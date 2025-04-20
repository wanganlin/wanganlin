// 基本特征定义
trait Greet {
    fn greet(&self) -> String;
}

// 特征实现
struct Person {
    name: String,
}

impl Greet for Person {
    fn greet(&self) -> String {
        format!("Hello, {}!", self.name)
    }
}

// 默认方法
trait Speak {
    fn speak(&self) {
        println!("Default speaking...");
    }
}

// 关联类型
trait Iterator {
    type Item;
    fn next(&mut self) -> Option<Self::Item>;
}

// 特征约束
fn print_greeting<T: Greet>(item: T) {
    println!("{}", item.greet());
}

// 特征对象
trait Animal {
    fn make_sound(&self);
}

struct Dog;
struct Cat;

impl Animal for Dog {
    fn make_sound(&self) {
        println!("Woof!");
    }
}

impl Animal for Cat {
    fn make_sound(&self) {
        println!("Meow!");
    }
}

fn main() {
    // 基本特征使用
    let person = Person { name: String::from("Alice") };
    println!("{}", person.greet());

    // 特征约束
    print_greeting(person);

    // 特征对象
    let animals: Vec<Box<dyn Animal>> = vec![
        Box::new(Dog),
        Box::new(Cat),
    ];

    for animal in animals {
        animal.make_sound();
    }
}