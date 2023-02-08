package com.example.spring.expception;

public class GraceException {

    public static void error(String message) {
        throw new HandlerException(message);
    }
}
