<?php

use XMLDatatype\URI,
    XMLDatatype\Exception\UnexpectedValueException;

class URITest extends PHPUnit_Framework_TestCase
{
    /**
     * @return array Valid example URIs from RFC2396 & 2732
     */
    public function provider()
    {
        return array(
            array('ftp://ftp.is.co.za/rfc/rfc1808.txt'),
            array('gopher://spinaltap.micro.umn.edu/00/Weather/California/Los%20Angeles'),
            array('http://www.math.uio.no/faq/compression-faq/part1.html'),
            array('mailto:mduerst@ifi.unizh.ch'),
            array('news:comp.infosystems.www.servers.unix'),
            array('telnet://melvyl.ucop.edu/'),
            array('http://[FEDC:BA98:7654:3210:FEDC:BA98:7654:3210]:80/index.html'),
            array('http://[1080:0:0:0:8:800:200C:417A]/index.html'),
            array('http://[3ffe:2a00:100:7031::1]'),
            array('http://[1080::8:800:200C:417A]/foo'),
            array('http://[::192.9.5.5]/ipng'),
            array('http://[::FFFF:129.144.52.38]:80/index.html'),
            array('http://[2010:836B:4179::836B:4179]')
        );
    }
    
    /**
     * @dataProvider provider
     */
    public function testNormal($uri)
    {
        $a = new URI();
        $a->setValue($uri);
        $this->assertEquals($uri, $a->getValue());
        $this->assertEquals($uri, $a->toString());
    }
    
    public function testInvalid()
    {
        $this->setExpectedException('XMLDatatype\Exception\UnexpectedValueException');
        $a = new URI('spanner');
    }
}
