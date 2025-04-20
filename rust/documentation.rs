//! 这是模块级的文档注释，使用//!
//! 这个模块演示了Rust中的各种文档注释功能

/// 这是一个函数的文档注释，使用///
/// # 示例
/// ```
/// let result = add(2, 3);
/// assert_eq!(result, 5);
/// ```
/// # Panics
/// 这个函数不会panic
/// # Safety
/// 这个函数是安全的
/// # Returns
/// 返回两个数的和
#[must_use]
pub fn add(a: i32, b: i32) -> i32 {
    a + b
}

/// 这是一个结构体的文档注释
/// 结构体表示一个点
#[derive(Debug)]
pub struct Point {
    /// x坐标的文档
    pub x: f64,
    /// y坐标的文档
    pub y: f64,
}

impl Point {
    /// 创建一个新点
    /// # 参数
    /// * `x` - x坐标
    /// * `y` - y坐标
    pub fn new(x: f64, y: f64) -> Self {
        Self { x, y }
    }

    /// 计算到原点的距离
    pub fn distance_from_origin(&self) -> f64 {
        (self.x.powi(2) + self.y.powi(2)).sqrt()
    }
}

/// 这是一个枚举的文档注释
/// 表示不同的形状
pub enum Shape {
    /// 圆形
    Circle { radius: f64 },
    /// 矩形
    Rectangle { width: f64, height: f64 },
}

/// 文档注释中的Markdown格式
/// 
/// - 列表项1
/// - 列表项2
/// 
/// **粗体** *斜体* `代码`
/// 
/// [链接](https://www.rust-lang.org)
/// 
/// > 引用块
/// 
/// ```rust
/// // 代码块
/// let x = 5;
/// ```
#[doc = "这是使用#[doc]属性的文档注释"]
pub fn doc_attribute() {}

/// 文档测试
/// 
/// ```
/// # use documentation::add;
/// let result = add(2, 2);
/// assert_eq!(result, 4);
/// ```
pub fn doc_test_example() {}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_add() {
        assert_eq!(add(2, 3), 5);
    }

    #[test]
    fn test_point_distance() {
        let p = Point::new(3.0, 4.0);
        assert_eq!(p.distance_from_origin(), 5.0);
    }
}