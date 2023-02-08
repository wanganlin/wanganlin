package com.example.spring.controller;

import com.example.spring.scheduler.MyAsync;
import lombok.extern.slf4j.Slf4j;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ResponseBody;
import org.thymeleaf.TemplateEngine;
import org.thymeleaf.context.Context;

import javax.servlet.http.HttpServletRequest;
import java.io.FileWriter;
import java.io.IOException;
import java.io.Writer;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Date;
import java.util.HashMap;

@Controller
@Slf4j
public class IndexController {

    @Autowired
    MyAsync myAsync;

    @GetMapping("/")
    public String index(Model model, HttpServletRequest request) {
        myAsync.testLog();
        log.warn("同步执行时间：" + LocalDateTime.now());

        String varName = "haha model varName";
        model.addAttribute("varName", varName);

        LocalDate now = LocalDate.now();
        model.addAttribute("now", now);

        LocalDateTime time = LocalDateTime.now();
        model.addAttribute("time", time);

        DateTimeFormatter dateTimeFormatter = DateTimeFormatter.ofPattern("MM-dd");
        model.addAttribute("timeFormat", time.format(dateTimeFormatter));

        Date date = new Date();
        model.addAttribute("date", date);

        Integer sex = 0;
        model.addAttribute("sex", sex);

        ArrayList<String> myList = new ArrayList<>();
        myList.add("java");
        myList.add("php");
        myList.add("go");
        myList.add("rust");
        myList.add("ts");
        model.addAttribute("myList", myList);

        HashMap<String, Object> myMap = new HashMap<>();
        myMap.put("name", "王武");
        myMap.put("age", 13);
        myMap.put("sex", "男");
        myMap.put("loves", myList);
        model.addAttribute("myMap", myMap);

        request.setAttribute("enName", "john");
        request.getSession().setAttribute("token", "1234455");

        return "index";
    }

    @Autowired
    private TemplateEngine templateEngine;

    @GetMapping("/makeHtml")
    @ResponseBody
    public String makeHtml(Model model, HttpServletRequest request) throws Throwable {

        String varName = "haha model varName";
        model.addAttribute("varName", varName);

        LocalDate now = LocalDate.now();
        model.addAttribute("now", now);

        LocalDateTime time = LocalDateTime.now();
        model.addAttribute("time", time);

        DateTimeFormatter dateTimeFormatter = DateTimeFormatter.ofPattern("MM-dd");
        model.addAttribute("timeFormat", time.format(dateTimeFormatter));

        Date date = new Date();
        model.addAttribute("date", date);

        Integer sex = 0;
        model.addAttribute("sex", sex);

        ArrayList<String> myList = new ArrayList<>();
        myList.add("java");
        myList.add("php");
        myList.add("go");
        myList.add("rust");
        myList.add("ts");
        model.addAttribute("myList", myList);

        HashMap<String, Object> myMap = new HashMap<>();
        myMap.put("name", "王武");
        myMap.put("age", 13);
        myMap.put("sex", "男");
        myMap.put("loves", myList);
        model.addAttribute("myMap", myMap);

        Context context = new Context();
        context.setVariable("varName", varName);
        context.setVariable("now", now);
        context.setVariable("time", time);
        context.setVariable("timeFormat", time.format(dateTimeFormatter));
        context.setVariable("date", date);
        context.setVariable("sex", sex);
        context.setVariable("myList", myList);
        context.setVariable("myMap", myMap);

        String savePath = "/tmp/index.html";
        Writer w = new FileWriter(savePath);
        templateEngine.process("index2", context, w);
        w.close();

        return "ok";
    }

}
