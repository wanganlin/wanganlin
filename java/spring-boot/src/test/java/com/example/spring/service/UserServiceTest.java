package com.example.spring.service;

import com.example.spring.model.User;
import org.junit.jupiter.api.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.context.SpringBootTest;

@SpringBootTest
class UserServiceTest {

    @Autowired
    private UserService userService;

    @Test
    public void createUser() {
        User user = new User();
        user.setName("testname");
        user.setAvatar("test avatar");
        userService.saveUser(user);
    }
}