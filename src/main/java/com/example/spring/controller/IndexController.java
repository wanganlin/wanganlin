package com.example.spring.controller;

import com.example.spring.scheduler.MyAsync;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

import java.time.LocalDateTime;

@RestController
@Slf4j
public class IndexController {

    @Autowired
    MyAsync myAsync;

    @GetMapping("/")
    public String index() {
        myAsync.testLog();
        log.warn("同步执行时间：" + LocalDateTime.now());
        return "hello imooc";
    }

}
