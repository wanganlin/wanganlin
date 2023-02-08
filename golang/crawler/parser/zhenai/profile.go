package zhenai

import (
	"crawler/engine"
	"crawler/model"
	"regexp"
	"strconv"
)

// var nameRegex = regexp.MustCompile(`<h1 class="ceiling-name ib fl fs24 lh32 blue">(.+)</h1>`)
var genderRegex = regexp.MustCompile(`<span class="label">性别：</span><span field="">(.+)</span>`)
var ageRegex = regexp.MustCompile(`<span class="label">年龄：</span>(\d+)岁</td>`)
var heightRegex = regexp.MustCompile(`<span class="label">身高：</span>(.+)</td>`)
var weightRegex = regexp.MustCompile(`<span class="label">体重：</span><span field="">(.+)</span>`)
var incomeRegex = regexp.MustCompile(`<span class="label">月收入：</span>(.+)</td>`)
var marryRegex = regexp.MustCompile(`<span class="label">婚况：</span>(.+)</td>`)
var educationRegex = regexp.MustCompile(`<span class="label">学历：</span>(.+)</td>`)
var occupationRegex = regexp.MustCompile(`<span class="label">职业： </span>(.+)</td>`)
var jiguanRegex = regexp.MustCompile(`<span class="label">籍贯：</span>(.+)</td>`)
var xingzuoRegex = regexp.MustCompile(`<span class="label">星座：</span><span field="">(.+)</span>`)
var houseRegex = regexp.MustCompile(`<span class="label">住房条件：</span><span field="">(.+)</span>`)
var carRegex = regexp.MustCompile(`<span class="label">是否购车：</span><span field="">(.+)</span>`)
var guessRegex = regexp.MustCompile(`<a class="exp-user-name"[^>]*href="(http://localhost:8080/mock/album.zhenai.com/u/[\d]+)">([^<]+)</a>`)
var idRegex = regexp.MustCompile(`http://localhost:8080/mock/album.zhenai.com/u/([\d]+)`)

func ParseProfile(contents []byte, url string, name string) engine.ParseResult {
	profile := model.Profile{}

	// profile.Name = extractString(contents, nameRegex)
	profile.Name = name
	profile.Gender = extractString(contents, genderRegex)
	age, err := strconv.Atoi(extractString(contents, ageRegex))
	if err == nil {
		profile.Age = age
	}
	profile.Height = extractString(contents, heightRegex)
	profile.Weight = extractString(contents, weightRegex)
	profile.Income = extractString(contents, incomeRegex)
	profile.Marriage = extractString(contents, marryRegex)
	profile.Education = extractString(contents, educationRegex)
	profile.Occupation = extractString(contents, occupationRegex)
	profile.Jiguan = extractString(contents, jiguanRegex)
	profile.Xingzuo = extractString(contents, xingzuoRegex)
	profile.House = extractString(contents, houseRegex)
	profile.Car = extractString(contents, carRegex)

	result := engine.ParseResult{
		Items: []engine.Item{
			{
				Url:     url,
				Id:      extractString([]byte(url), idRegex),
				Payload: profile,
			},
		},
	}

	// guess
	matches := guessRegex.FindAllSubmatch(contents, -1)
	for _, m := range matches {
		result.Requests = append(result.Requests, engine.Request{
			Url:        string(m[1]),
			ParserFunc: ProfileParser(string(m[2])),
		})
	}

	return result
}

func extractString(contents []byte, re *regexp.Regexp) string {
	match := re.FindSubmatch(contents)
	if len(match) >= 2 {
		return string(match[1])
	}

	return ""
}

func ProfileParser(name string) engine.ParserFunc {
	return func(c []byte, url string) engine.ParseResult {
		return ParseProfile(c, url, name)
	}
}
