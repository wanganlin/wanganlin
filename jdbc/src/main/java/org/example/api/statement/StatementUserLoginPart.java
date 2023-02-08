package org.example.api.statement;

import com.mysql.cj.jdbc.Driver;

import java.sql.*;
import java.util.Scanner;

public class StatementUserLoginPart {

    public static void main(String[] args) throws SQLException {
        // 获取用户输入信息
        Scanner scanner = new Scanner(System.in);
        System.out.println("请输入账号：");
        String s1 = scanner.nextLine();
        System.out.println("请输入密码：");
        String s2 = scanner.nextLine();

        // 注册驱动
        /**
         * 问题：注册两次：
         *  1. DriverManager.registerDriver 注册一次
         *  2. Driver.static{DriverManager.registerDriver()} 静态代码块，注册一次
         * 解决：只想注册一次
         *  只触发静态代码块
         * 触发静态代码块：
         *  类加载机制
         */
        DriverManager.registerDriver(new Driver());


        Connection connection = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/learn_jdbc", "root", "root");
        Statement statement = connection.createStatement();
        String sql = "select * from user ";
        ResultSet resultSet = statement.executeQuery(sql);

        resultSet.close();
        statement.close();
        connection.close();
    }
}
