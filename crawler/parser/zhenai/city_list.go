package zhenai

import (
	"crawler/engine"
	"regexp"
)

const cityListRegex = `<a href="(http://localhost:8080/mock/www.zhenai.com/zhenghun/[a-z0-9]+)"[^>]*>([^<]+)</a>`

func ParseCityList(contents []byte, _ string) engine.ParseResult {
	compile := regexp.MustCompile(cityListRegex)
	matches := compile.FindAllSubmatch(contents, -1)

	result := engine.ParseResult{}
	for _, m := range matches {
		// fmt.Printf("City: %s, URL: %s\n", m[2], m[1])
		// result.Items = append(result.Items, string(m[2]))
		result.Requests = append(result.Requests, engine.Request{
			Url:        string(m[1]),
			ParserFunc: ParseCity,
		})
	}

	// fmt.Printf("Matches found: %d\n", len(matches))
	return result
}
