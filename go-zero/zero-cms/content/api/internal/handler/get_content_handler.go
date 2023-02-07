package handler

import (
	"net/http"

	"github.com/zeromicro/go-zero/rest/httpx"
	"gosoft/cms/content/api/internal/logic"
	"gosoft/cms/content/api/internal/svc"
	"gosoft/cms/content/api/internal/types"
)

func getContentHandler(svcCtx *svc.ServiceContext) http.HandlerFunc {
	return func(w http.ResponseWriter, r *http.Request) {
		var req types.ContentReq
		if err := httpx.Parse(r, &req); err != nil {
			httpx.Error(w, err)
			return
		}

		l := logic.NewGetContentLogic(r.Context(), svcCtx)
		resp, err := l.GetContent(&req)
		if err != nil {
			httpx.Error(w, err)
		} else {
			httpx.OkJson(w, resp)
		}
	}
}
