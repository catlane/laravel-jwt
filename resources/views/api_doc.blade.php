<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$channel_title}}接口文档</title>
</head>
<style>
    body{
        margin: 0;
        padding:0;
        color: rgb(24,24,25,0.9);
    }
    :root[theme=light], :root[theme=lightbrown] {
        --color-prettylights-syntax-comment: #6e7781;
        --color-prettylights-syntax-constant: #0550ae;
        --color-prettylights-syntax-entity: #8250df;
        --color-prettylights-syntax-storage-modifier-import: #24292f;
        --color-prettylights-syntax-entity-tag: #116329;
        --color-prettylights-syntax-keyword: #cf222e;
        --color-prettylights-syntax-string: #0a3069;
        --color-prettylights-syntax-variable: #953800;
        --color-prettylights-syntax-brackethighlighter-unmatched: #82071e;
        --color-prettylights-syntax-invalid-illegal-text: #f6f8fa;
        --color-prettylights-syntax-invalid-illegal-bg: #82071e;
        --color-prettylights-syntax-carriage-return-text: #f6f8fa;
        --color-prettylights-syntax-carriage-return-bg: #cf222e;
        --color-prettylights-syntax-string-regexp: #116329;
        --color-prettylights-syntax-markup-list: #3b2300;
        --color-prettylights-syntax-markup-heading: #0550ae;
        --color-prettylights-syntax-markup-italic: #24292f;
        --color-prettylights-syntax-markup-bold: #24292f;
        --color-prettylights-syntax-markup-deleted-text: #82071e;
        --color-prettylights-syntax-markup-deleted-bg: #ffebe9;
        --color-prettylights-syntax-markup-inserted-text: #116329;
        --color-prettylights-syntax-markup-inserted-bg: #dafbe1;
        --color-prettylights-syntax-markup-changed-text: #953800;
        --color-prettylights-syntax-markup-changed-bg: #ffd8b5;
        --color-prettylights-syntax-markup-ignored-text: #eaeef2;
        --color-prettylights-syntax-markup-ignored-bg: #0550ae;
        --color-prettylights-syntax-meta-diff-range: #8250df;
        --color-prettylights-syntax-brackethighlighter-angle: #57606a;
        --color-prettylights-syntax-sublimelinter-gutter-mark: #8c959f;
        --color-prettylights-syntax-constant-other-reference-link: #0a3069;
        --color-fg-default: var(--md-color-text);
        --color-fg-muted: #57606a;
        --color-fg-subtle: #6e7781;
        --color-canvas-default: var(--md-color-bg);
        --app-bg-300: #f3f5f6;
        --color-canvas-subtle: #f9f9f9;
        --color-border-default: #d0d7de;
        --color-border-muted: #d8dee4;
        --color-neutral-muted: rgba(175,184,193,0.2);
        --color-accent-fg: #0969da;
        --color-accent-emphasis: #0969da;
        --color-attention-subtle: #fff8c5;
        --ui-white: #fff;
        --ui-body-background: var(--ui-white);
        --color-danger-fg: #cf222e;
        --md-color-border: var(--app-bg-300);
        --md-color-bg: var(--ui-body-background);
        --md-color-text: rgba(24,24,25,0.7);
        --md-color-hover: rgba(86,87,88,0.04);
    }
    .content__base-info___23F8_ {

        margin-top: 16px;
    }
    .markdown-body {
        padding: 0 150px;
        --color-fg-default: var(--md-color-text);
        --color-canvas-default: var(--md-color-bg);
        margin: 0;
        color: var(--color-fg-default);
        font-size: 16px;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji";
        line-height: 1.5;
        word-wrap: break-word;
        background-color: var(--color-canvas-default);
        -webkit-user-select: text;
        -moz-user-select: text;
        -ms-user-select: text;
        user-select: text;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }
    .markdown-body:before {
        display: table;
        content: "";
    }
    .markdown-body>:first-child {
        margin-top: 0!important;
    }
    .container___3Wwqw h1 {
        font-size: 28px;
    }
    .markdown-body h1, .markdown-body h2, .markdown-body h3, .markdown-body h4, .markdown-body h5, .markdown-body h6 {
        margin-top: 24px;
        margin-bottom: 16px;
        color: var(--md-color-text)!important;
        font-weight: 600;
        line-height: 1.25;
    }
    .markdown-body h1 {
        margin: 0.67em 0;
        padding-bottom: 0.3em;
        font-weight: 600;
        font-size: 2em;
        border-bottom: 1px solid #d8dee4;
    }
    .markdown-body a {
        color: rgb(147, 115, 238);;
        text-decoration: none;
        background-color: transparent;
    }
    .markdown-body .highlight pre, .markdown-body pre {
        padding: 16px;
        overflow: auto;
        font-size: 85%;
        line-height: 1.45;
        background-color: rgba(86,87,88,0.04);
        border-radius: 6px;
    }

    .markdown-body pre code, .markdown-body pre tt {
        display: inline;
        max-width: auto;
        margin: 0;
        padding: 0;
        overflow: visible;
        line-height: inherit;
        word-wrap: normal;
        background-color: transparent;
        border: 0;
        border-radius: 6px
    }
    .markdown-body pre>code {
        margin: 0;
        padding: 0;
        white-space: pre;
        word-break: normal;
        background: transparent;
        border: 0;
    }
    .markdown-body pre code {
        font-size: 100%;
    }


    .markdown-body table {
        font-size: 14px;
        border-collapse: separate;
        margin-top: 0;
        margin-bottom: 16px;
        display: block;
        width: -moz-max-content;
        width: max-content;
        max-width: 100%;
        overflow: auto;
        border-spacing: 0;
        word-break: break-word;
    }
    .markdown-body table th {
        color: rgb(16,24,40);
        font-weight: 500;
        text-align: left;
        border-top: 1px solid #f2f4f7;
    }
    .markdown-body table tbody tr {
        background-color: transparent;
        box-sizing: border-box;
    }
    .markdown-body table td:first-child {
        border-left: 1px solid #f2f4f7;
    }
    .container___3Wwqw table td {
        word-break: break-all;
    }

    .markdown-body table td, .markdown-body table th {
        padding: 6px 13px;
        border-right: 1px solid #f2f4f7;
        border-bottom: 1px solid #f2f4f7;
    }
    strong{
        color: rgb(240 39 39);
    }
</style>
<body>

<div class="content__base-info___23F8_">
    <div class="markdown-body"><h1 >{{$channel_title}}-请求API</h1>
        <h3 id="请求地址">请求地址</h3>
        <p><a href="http://127.0.0.1:8880/api/data-collect">http://127.0.0.1:8880/api/data-collect</a></p>
        <h3 id="请求方式">请求方式</h3>
        <p>POST</p>
        <h3 id="公钥">公钥</h3>
        <pre><code class="hljs language-awk">
{{$encrypt_public_key}}
</code></pre>
        <h3 id="query参数">Query参数</h3>


        <table>
            <thead>
            <tr>
                <th>参数名</th>
                <th>参数值</th>
                <th>描述</th>
                <th>必填</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>channel_name</td>
                <td>Baidu</td>
                <td>渠道标签</td>
                <td>必填</td>
            </tr>
            <tr>
                <td>debug</td>
                <td>true</td>
                <td>true的话将会返回解密参数</td>
                <td>非必填</td>
            </tr>
            </tbody>
        </table>
        <h3 id="body-参数">Body 参数</h3>


        <table>
            <thead>
            <tr>
                <th>参数名</th>
                <th>参数值</th>
                <th>描述</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>name</td>
                <td>某某某</td>
                <td>姓名</td>
            </tr>
            <tr>
                <td>mobile</td>
                <td>15133333333</td>
                <td>手机号</td>
            </tr>
            <tr>
                <td>price</td>
                <td>100</td>
                <td>贷款金额(单位为万)</td>
            </tr>
            <tr>
                <td>house</td>
                <td>1</td>
                <td>房子【1有 0 没有】</td>
            </tr>
            <tr>
                <td>car</td>
                <td>1</td>
                <td>车【1有 0 没有】</td>
            </tr>
            <tr>
                <td>insurance</td>
                <td>1</td>
                <td>保单【1有 0 没有】</td>
            </tr>
            <tr>
                <td>fund</td>
                <td>1</td>
                <td>公积金【1有 0 没有】</td>
            </tr>
            <tr>
                <td>socital</td>
                <td>1</td>
                <td>社保【1有 0 没有】</td>
            </tr>
            <tr>
                <td>credit_card</td>
                <td>1</td>
                <td>信用卡【1有 0 没有】</td>
            </tr>
            <tr>
                <td>wld</td>
                <td>1</td>
                <td>微粒贷【1有 0 没有】</td>
            </tr>
            <tr>
                <td>qyns</td>
                <td>1</td>
                <td>企业纳税【1有 0 没有】</td>
            </tr>
            <tr>
                <td>df</td>
                <td>1</td>
                <td>代发工资【1有 0 没有】</td>
            </tr>
            <tr>
                <td>business_license</td>
                <td>1</td>
                <td>营业执照【1有 0 没有】</td>
            </tr>
            <tr>
                <td>city</td>
                <td>北京</td>
                <td>城市</td>
            </tr>
            <tr>
                <td>age</td>
                <td>30</td>
                <td>年龄</td>
            </tr>
            <tr>
                <td>loan_periods</td>
                <td>12</td>
                <td>贷款期限</td>
            </tr>
            </tbody>
        </table>
        <h3 id="请求步骤">请求步骤：</h3>
        <ol>
            <li>body中参数转换为<strong>Json字符串</strong></li>
            <li>将<strong>Json字符串</strong>按照长度长度<strong>128字</strong>节拆分开若干个数组</li>
            <li>然后用给到的公钥将拆分开的字符串进行分别加密，填充方式为：<strong>OPENSSL_PKCS1_OAEP_PADDING</strong></li>
            <li>然后将上边加密后的若干部分拼接成一个字符串str;</li>
            <li>将str进行<strong>base64_encode</strong>加密；</li>
            <li>传递参数到<strong>body</strong>中，类型为<strong>Raw</strong></li>
        </ol>
        <h3 id="成功返回">成功返回</h3>
        <pre><code class="hljs language-css">{
	"<span class="hljs-selector-tag">code</span>": <span class="hljs-number">200</span>,
	<span class="hljs-string">"msg"</span>: <span class="hljs-string">"添加成功"</span>,
	<span class="hljs-string">"data"</span>: []
}
</code></pre>
        <h3 id="失败返回">失败返回</h3>
        <p>注：参数不正确均会返回400</p>
        <pre><code class="hljs language-css">{
    "<span class="hljs-selector-tag">code</span>": <span class="hljs-number">400</span>,
    <span class="hljs-string">"msg"</span>: <span class="hljs-string">"手机号已存在"</span>,
    <span class="hljs-string">"data"</span>: []
}
</code></pre>
    </div>
</div>
</body>
</html>
