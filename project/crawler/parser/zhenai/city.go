package zhenai

import (
	"crawler/engine"
	"regexp"
)

var (
	profileRegex = regexp.MustCompile(`<a href="(http://localhost:8080/mock/album.zhenai.com/u/[0-9]+)"[^>]*>([^<]+)</a>`)
	cityRegex    = regexp.MustCompile(`<a href="(http://localhost:8080/mock/www.zhenai.com/zhenghun/[^"]+)">`)
)

func ParseCity(contents []byte, _ string) engine.ParseResult {
	matches := profileRegex.FindAllSubmatch(contents, -1)

	result := engine.ParseResult{}
	for _, m := range matches {
		// fmt.Printf("City: %s, URL: %s\n", m[2], m[1])
		// result.Items = append(result.Items, name)
		result.Requests = append(result.Requests, engine.Request{
			Url:        string(m[1]),
			ParserFunc: ProfileParser(string(m[2])),
		})
	}

	matches = cityRegex.FindAllSubmatch(contents, -1)
	for _, m := range matches {
		result.Requests = append(result.Requests, engine.Request{
			Url:        string(m[1]),
			ParserFunc: ParseCity,
		})
	}

	// fmt.Printf("Matches found: %d\n", len(matches))
	return result
}
