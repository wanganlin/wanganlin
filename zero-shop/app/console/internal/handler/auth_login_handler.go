package handler

import (
	"net/http"

	"github.com/zeromicro/go-zero/rest/httpx"
	"gosoft/shop/app/console/internal/logic"
	"gosoft/shop/app/console/internal/svc"
	"gosoft/shop/app/console/internal/types"
)

func authLoginHandler(svcCtx *svc.ServiceContext) http.HandlerFunc {
	return func(w http.ResponseWriter, r *http.Request) {
		var req types.LoginReq
		if err := httpx.Parse(r, &req); err != nil {
			httpx.Error(w, err)
			return
		}

		l := logic.NewAuthLoginLogic(r.Context(), svcCtx)
		resp, err := l.AuthLogin(&req)
		if err != nil {
			httpx.Error(w, err)
		} else {
			httpx.OkJson(w, resp)
		}
	}
}
