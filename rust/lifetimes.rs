// 基本生命周期标注
fn longest<'a>(x: &'a str, y: &'a str) -> &'a str {
    if x.len() > y.len() { x } else { y }
}

// 结构体中的生命周期参数
struct ImportantExcerpt<'a> {
    part: &'a str,
}

// 方法实现中的生命周期
impl<'a> ImportantExcerpt<'a> {
    fn announce_and_return_part(&self, announcement: &str) -> &str {
        println!("Attention please: {}", announcement);
        self.part
    }
}

// 生命周期省略规则示例
fn first_word(s: &str) -> &str {
    let bytes = s.as_bytes();
    for (i, &item) in bytes.iter().enumerate() {
        if item == b' ' {
            return &s[0..i];
        }
    }
    &s[..]
}

// 生命周期子类型示例
fn longest_with_announcement<'a, T>(
    x: &'a str,
    y: &'a str,
    ann: T,
) -> &'a str
where
    T: std::fmt::Display,
{
    println!("Announcement! {}", ann);
    if x.len() > y.len() { x } else { y }
}

fn main() {
    // 基本生命周期函数调用
    let string1 = String::from("abcd");
    let string2 = "xyz";
    let result = longest(string1.as_str(), string2);
    println!("The longest string is {}", result);

    // 结构体生命周期
    let novel = String::from("Call me Ishmael. Some years ago...");
    let first_sentence = novel.split('.').next().expect("Could not find a '.'");
    let i = ImportantExcerpt { part: first_sentence };
    println!("Excerpt: {}", i.part);

    // 生命周期省略规则
    let s = String::from("hello world");
    let word = first_word(&s);
    println!("First word: {}", word);

    // 生命周期子类型
    let announcement = String::from("Important announcement!");
    let result = longest_with_announcement(string1.as_str(), string2, announcement);
    println!("Longest with announcement: {}", result);
}