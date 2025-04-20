// 基本单元测试
#[cfg(test)]
mod tests {
    #[test]
    fn it_works() {
        assert_eq!(2 + 2, 4);
    }

    // 测试panic情况
    #[test]
    #[should_panic]
    fn test_panic() {
        panic!("This test should panic");
    }

    // 测试忽略
    #[test]
    #[ignore]
    fn expensive_test() {
        // 模拟耗时操作
        std::thread::sleep(std::time::Duration::from_secs(10));
    }
}

// 文档测试
/// 这是一个加法函数
///
/// # Examples
///
/// ```
/// let result = add(2, 3);
/// assert_eq!(result, 5);
/// ```
fn add(a: i32, b: i32) -> i32 {
    a + b
}

// 测试模块组织
#[cfg(test)]
mod advanced_tests {
    use super::*;

    #[test]
    fn test_add() {
        assert_eq!(add(1, 2), 3);
    }

    // 测试宏
    #[test]
    fn test_assert_macro() {
        assert!(true);
        assert_eq!(1, 1);
        assert_ne!(1, 2);
    }
}

// 性能测试（使用bench特性）
#[cfg(test)]
mod bench_tests {
    #[bench]
    fn bench_add(b: &mut test::Bencher) {
        b.iter(|| {
            let n = test::black_box(1000);
            (0..n).fold(0, |a, b| a + b)
        });
    }
}