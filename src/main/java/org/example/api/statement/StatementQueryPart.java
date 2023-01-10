package org.example.api.statement;

import com.mysql.cj.jdbc.Driver;

import java.sql.*;

public class StatementQueryPart {

    /**
     * TODO:
     *  DriverManager
     *  Connection
     *  Statement
     *  ResultSet
     *
     * @param args
     */
    public static void main(String[] args) throws SQLException {
        // 1、注册驱动
        // 驱动版本：5+ com.mysql.jdbc.Driver
        //         8+ com.mysql.cj.jdbc.Driver
        DriverManager.registerDriver(new Driver());

        // 2、创建连接
        // java程序要和数据库创建连接
        Connection connection = DriverManager.getConnection("jdbc:mysql://127.0.0.1:3306/learn_jdbc", "root", "root");

        // 3、创建发送sql语句对象
        Statement statement = connection.createStatement();

        // 4、发送sql语句，获取结果
        String sql = "select * from user";
        ResultSet resultSet = statement.executeQuery(sql);

        // 5、结果解析
        while (resultSet.next()) {
            int id = resultSet.getInt("id");
            String username = resultSet.getString("username");
            System.out.println(id + ": " + username);
        }

        // 6、释放资源
        resultSet.close();
        statement.close();
        connection.close();
    }
}
