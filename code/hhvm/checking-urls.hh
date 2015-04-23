<?hh

$cachedListPath = __DIR__ . '/articles.txt';
if (!file_exists($cachedListPath)) {
    $topArticlesHtml = file_get_contents(
        'http://en.wikipedia.org/wiki/Wikipedia:Most_read_articles_in_2010'
    );

    file_put_contents($cachedListPath, $topArticlesHtml);
} else {
    $topArticlesHtml = file_get_contents($cachedListPath);
}

if (empty($topArticlesHtml)) {
    die('Could not get articles');
}

$rankings = extractRankings($topArticlesHtml);
var_dump($rankings); die;


function extractRankings(string $html): array
{
    $data = array();
    if(
        preg_match_all(
            '/<li>([\d,]+) \[[\d.%&lt;]+]: <a href="\/wiki\/[^>]+" title="([^"]+)"/',
            $html,
            $matches
        )
    ) {

        foreach ($matches[2] as $k => $match) {
            $data[str_replace(',', '', $matches[1][$k])] = $match;
        }
    }

    return $data;
}