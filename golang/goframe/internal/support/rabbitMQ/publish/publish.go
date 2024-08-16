package publish

import (
	"gitee.com/gosoft/gomall/internal/support/rabbitMQ"
	amqp "github.com/rabbitmq/amqp091-go"
)

func Publish() {
	mq := rabbitMQ.Manager()

	// 4.发送消息
	err := mq.Channel.Publish(
		mq.Exchange,   // 交换器名
		mq.RoutingKey, // routing key
		false,         // 是否返回消息(匹配队列)，如果为true, 会根据binding规则匹配queue，如未匹配queue，则把发送的消息返回给发送者
		false,         // 是否返回消息(匹配消费者)，如果为true, 消息发送到queue后发现没有绑定消费者，则把发送的消息返回给发送者
		amqp.Publishing{ // 发送的消息，固定有消息体和一些额外的消息头，包中提供了封装对象
			ContentType: "text/plain",           // 消息内容的类型
			Body:        []byte("hello jochen"), // 消息内容
		},
	)

	if err != nil {
		return
	}
}
