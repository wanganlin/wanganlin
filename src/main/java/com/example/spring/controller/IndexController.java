package com.example.spring.controller;

import com.example.spring.scheduler.MyAsync;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.time.LocalDateTime;

@Controller
@Slf4j
public class IndexController {

    @Autowired
    MyAsync myAsync;

    @GetMapping("/")
    public String index(Model model) {
        myAsync.testLog();
        log.warn("同步执行时间：" + LocalDateTime.now());

        model.addAttribute("varName", "haha model varName");

        return "index";
    }

}
