<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
  <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html lang="id">
      <head>
        <title>XML Sitemap — PT Mahardika Logam Persada</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <style>
          * { box-sizing: border-box; margin: 0; padding: 0; }
          body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: #101315;
            color: #f2f4f5;
            padding: 40px 20px;
            line-height: 1.6;
          }
          .container {
            max-width: 960px;
            margin: 0 auto;
            background: #1a1f22;
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 12px;
            padding: 32px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.4);
          }
          h1 {
            color: #fff;
            font-size: 26px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
          }
          .badge {
            background: rgba(208,131,63,0.18);
            border: 1px solid #d0833f;
            color: #d0833f;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 600;
          }
          p.desc {
            color: rgba(242,244,245,0.72);
            font-size: 14.5px;
            margin-bottom: 24px;
          }
          p.desc a {
            color: #d0833f;
            text-decoration: underline;
          }
          table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 16px;
            font-size: 14px;
          }
          th {
            background: rgba(255,255,255,0.06);
            color: #fff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border-bottom: 2px solid #d0833f;
          }
          td {
            padding: 12px 14px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            word-break: break-all;
          }
          tr:hover td {
            background: rgba(255,255,255,0.03);
          }
          td a {
            color: #d0833f;
            text-decoration: none;
            font-weight: 500;
          }
          td a:hover {
            text-decoration: underline;
          }
          .meta {
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid rgba(255,255,255,0.08);
            font-size: 13px;
            color: rgba(242,244,245,0.5);
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <h1>
            <span>XML Sitemap</span>
            <span class="badge">Google &amp; AI Compliant</span>
          </h1>
          <p class="desc">
            Sitemap ini dibuat secara otomatis untuk membantu mesin pencari seperti Google, Bing, dan sistem AI mengindeks seluruh halaman resmi <strong>PT Mahardika Logam Persada</strong>.
          </p>

          <table>
            <thead>
              <tr>
                <th style="width: 55%;">Lokasi URL</th>
                <th style="width: 15%;">Prioritas</th>
                <th style="width: 15%;">Frekuensi</th>
                <th style="width: 15%;">Terakhir Diperbarui</th>
              </tr>
            </thead>
            <tbody>
              <xsl:for-each select="sitemap:urlset/sitemap:url">
                <tr>
                  <td>
                    <a href="{sitemap:loc}" target="_blank">
                      <xsl:value-of select="sitemap:loc"/>
                    </a>
                  </td>
                  <td>
                    <xsl:value-of select="sitemap:priority"/>
                  </td>
                  <td>
                    <xsl:value-of select="sitemap:changefreq"/>
                  </td>
                  <td>
                    <xsl:value-of select="sitemap:lastmod"/>
                  </td>
                </tr>
              </xsl:for-each>
            </tbody>
          </table>

          <div class="meta">
            <span>Total Halaman: <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> URL</span>
            <span>© 2026 PT Mahardika Logam Persada</span>
          </div>
        </div>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
