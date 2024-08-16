package rabbitMQ

import (
	amqp "github.com/rabbitmq/amqp091-go"
	"log"
)

func MQUrl() string {
	return "amqp://guest:guest@127.0.0.1:5672/go"
}

type RabbitMQ struct {
	Conn    *amqp.Connection
	Channel *amqp.Channel
	// 队列名称
	QueueName string
	// 交换机
	Exchange string
	// routing Key
	RoutingKey string
	//MQ链接字符串
	MqUrl string
}

// NewRabbitMQ 创建结构体实例
func NewRabbitMQ(queueName, exchange, routingKey string) *RabbitMQ {
	rabbitMQ := RabbitMQ{
		QueueName:  queueName,
		Exchange:   exchange,
		RoutingKey: routingKey,
		MqUrl:      MQUrl(),
	}

	var err error

	// 创建rabbitmq连接
	rabbitMQ.Conn, err = amqp.Dial(rabbitMQ.MqUrl)
	checkErr(err, "创建连接失败")

	// 创建Channel
	rabbitMQ.Channel, err = rabbitMQ.Conn.Channel()
	checkErr(err, "创建channel失败")

	return &rabbitMQ
}

// ReleaseRes 释放资源,建议NewRabbitMQ获取实例后 配合defer使用
func (mq *RabbitMQ) ReleaseRes() {
	mq.Conn.Close()
	mq.Channel.Close()
}

func checkErr(err error, meg string) {
	if err != nil {
		log.Fatalf("%s:%s\n", meg, err)
	}
}
