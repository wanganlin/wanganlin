package config

type MailConfig struct {
	Host     string
	Port     int
	Username string
	Password string
	From     MailFrom
}

type MailFrom struct {
	Address string
	Name    string
}
