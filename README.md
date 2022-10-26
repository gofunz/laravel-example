# 範例 Laravle-Modules 實作

詳細記錄可參考 commits

## 說明

建立購物車平台包網

一個 Core Module 作為主要核心業務邏輯開發而且可發佈 (Publish) 及更新 (Update)，若是有平台需要針對部份業務需求調整，可直接在專案中修改。

### 專案結構

基本上就是 Laravel 專案並且載入核心模組

- project
  - app
    - 平台可客制化
  - resources
    - 平台可客制化
  - Modules/Core/
    - 核心專案模組

## 參考

- [分離式客製化開發：兼顧模組化與客製化的 LARAVEL 彈性架構 by 阿川先生](https://blog.turn.tw/?p=3697)
