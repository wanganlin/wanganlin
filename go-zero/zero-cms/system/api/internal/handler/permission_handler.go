package handler

import (
	"net/http"

	"github.com/zeromicro/go-zero/rest/httpx"
	"gosoft/cms/system/api/internal/logic"
	"gosoft/cms/system/api/internal/svc"
	"gosoft/cms/system/api/internal/types"
)

func PermissionHandler(svcCtx *svc.ServiceContext) http.HandlerFunc {
	return func(w http.ResponseWriter, r *http.Request) {
		var req types.PermissionReq
		if err := httpx.Parse(r, &req); err != nil {
			httpx.Error(w, err)
			return
		}

		l := logic.NewPermissionLogic(r.Context(), svcCtx)
		resp, err := l.Permission(&req)
		if err != nil {
			httpx.Error(w, err)
		} else {
			httpx.OkJson(w, resp)
		}
	}
}
