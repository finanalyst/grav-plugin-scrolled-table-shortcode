<?php
namespace Grav\Plugin\Shortcodes;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;
class ScrolledTableShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('scrolled-table', function(ShortcodeInterface $sc) {
          $this->shortcode->addAssets('css','plugin://scrolled-table-shortcode/css-compiled/gravscrolledtable.css');
          $params = $sc->getParameters();
          $config = $this->config->get('plugins.scrolled-table-shortcode');
          // Is it necessary to hard code maximum and minimum widths/heights ?
          $width = isset( $params['width'] ) ?
            min ( max ( 10, ( int ) $params['width'] ), 90 )
            : $config['width'];
          $height = isset( $params['height'] ) ?
            min ( max ( 10, ( int ) $params['height'] ), 90 )
            : $config['height'];
          $output = $this->twig->processTemplate('partials/scrolled-table.html.twig', [
              'width' => $width,
              'height' => $height,
              'table' => $sc->getContent()
            ]);
          return $output;
        });
    }
}
