package com.example.spring.controller;

import com.example.spring.config.WebConfiguration;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class ConfigTestController {

    @Autowired
    private WebConfiguration webConfiguration;

    @GetMapping("/getConfig")
    public Object getConfig() {
        return webConfiguration;
    }

    @Value("${config.name}")
    private String username;

    @GetMapping("/getValueConfig")
    public Object getValueConfig() {
        return username;
    }

}
