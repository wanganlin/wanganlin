package com.example.spring.service;

import com.example.spring.model.User;

public interface UserService {

    int saveUser(User user);

    User queryById(String id);
}
