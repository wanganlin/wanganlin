package com.example.spring.service.impl;

import com.example.spring.mapper.UserMapper;
import com.example.spring.model.User;
import com.example.spring.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserServiceImpl implements UserService {

    @Autowired
    UserMapper userMapper;

    @Override
    public int saveUser(User user) {
        return userMapper.insert(user);
    }
}
