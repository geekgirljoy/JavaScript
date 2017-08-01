<!DOCTYPE html>
<html>
    <head>
        <title>Playable SVG & PNG Keyboard</title>
        <style>
        body {
            margin: 0;
            padding: 0;
            text-align: center; /* !!! */
            background-color: #222222;
        }
        h1,p {
            color:white;
        }

        .centered {
            margin: 0 auto;
            text-align: left;
            width: 600px;
        }
        </style>
    </head>
    <body>
        <audio id="C-Audio"><source src="audio/C.wav" type="audio/wav">
          Your browser doesn't support the audio element.
        </audio>
        <audio id="D-Audio"><source src="audio/D.wav" type="audio/wav"></audio>
        <audio id="E-Audio"><source src="audio/E.wav" type="audio/wav"></audio>
        <audio id="F-Audio"><source src="audio/F.wav" type="audio/wav"></audio>
        <audio id="G-Audio"><source src="audio/G.wav" type="audio/wav"></audio>
        <audio id="A-Audio"><source src="audio/A.wav" type="audio/wav"></audio>
        <audio id="B-Audio"><source src="audio/B.wav" type="audio/wav"></audio>
        <audio id="C-Sharp-Audio"><source src="audio/C-Sharp.wav" type="audio/wav"></audio>
        <audio id="D-Sharp-Audio"><source src="audio/D-Sharp.wav" type="audio/wav"></audio>
        <audio id="F-Sharp-Audio"><source src="audio/F-Sharp.wav" type="audio/wav"></audio>
        <audio id="G-Sharp-Audio"><source src="audio/G-Sharp.wav" type="audio/wav"></audio>
        <audio id="A-Sharp-Audio"><source src="audio/A-Sharp.wav" type="audio/wav"></audio>


        <?php
        if(isset($_POST['method'])){
            $method = $_POST['method'];
        }
        else{
        $method = "svg";
        }
        ?>

        <div class="centered">
        <?php if($method == "svg"){ ?>
            <h1>SVG</h1>
        <?php } elseif($method == "png"){ ?>
            <h1>PNG</h1>
        <?php } ?>
            <p>Click the keys to play a little tune!</p>

            <form action="#" method="POST">
                <select id="method" name="method" onchange="this.form.submit()">
                  <option value="svg" <?php if($method == "svg"){ echo "selected"; }?>>SVG - Inline Hyperlinks</option>
                  <option value="png" <?php if($method == "png"){ echo "selected"; }?>>PNG - ImageMap Hyperlinks</option>
                </select> 
            </form>
            
        <?php if($method == "svg"){ ?>
            <svg
           xmlns:dc="http://purl.org/dc/elements/1.1/"
           xmlns:cc="http://creativecommons.org/ns#"
           xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:xlink="http://www.w3.org/1999/xlink"
           xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
           xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
           width="600"
           height="500"
           viewBox="0 0 158.75 132.29167"
           version="1.1"
           id="geekgirljoys-playable-keyboard"
           inkscape:version="0.92.0 r15299"
           sodipodi:docname="keyboard.svg"
           inkscape:export-filename="C:\Users\Joy\Desktop\Piano\New\piano.png"
           inkscape:export-xdpi="300"
           inkscape:export-ydpi="300"
           style="enable-background:new">
          <defs
             id="defs12918">
            <linearGradient
               inkscape:collect="always"
               id="linearGradient5259">
              <stop
                 style="stop-color:#003380;stop-opacity:1;"
                 offset="0"
                 id="stop5255" />
              <stop
                 style="stop-color:#003380;stop-opacity:0;"
                 offset="1"
                 id="stop5257" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               id="linearGradient5021">
              <stop
                 style="stop-color:#ffffff;stop-opacity:1;"
                 offset="0"
                 id="stop5017" />
              <stop
                 style="stop-color:#ffffff;stop-opacity:0;"
                 offset="1"
                 id="stop5019" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               id="linearGradient4664">
              <stop
                 style="stop-color:#ffffff;stop-opacity:1"
                 offset="0"
                 id="stop4660" />
              <stop
                 style="stop-color:#000000;stop-opacity:0;"
                 offset="1"
                 id="stop4662" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               id="linearGradient4614">
              <stop
                 style="stop-color:#000000;stop-opacity:1;"
                 offset="0"
                 id="stop4610" />
              <stop
                 style="stop-color:#000000;stop-opacity:0;"
                 offset="1"
                 id="stop4612" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               id="linearGradient15315-5">
              <stop
                 style="stop-color:#f9f9f9;stop-opacity:1;"
                 offset="0"
                 id="stop15311" />
              <stop
                 style="stop-color:#000000;stop-opacity:0.79605263"
                 offset="1"
                 id="stop15313" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               id="linearGradient15157">
              <stop
                 style="stop-color:#333333;stop-opacity:1"
                 offset="0"
                 id="stop15153" />
              <stop
                 id="stop15161"
                 offset="0.5"
                 style="stop-color:#191919;stop-opacity:1;" />
              <stop
                 style="stop-color:#333333;stop-opacity:1"
                 offset="1"
                 id="stop15155" />
            </linearGradient>
            <linearGradient
               inkscape:collect="always"
               xlink:href="#linearGradient15157"
               id="linearGradient15159"
               x1="79.876411"
               y1="325.5043"
               x2="79.886864"
               y2="264.30887"
               gradientUnits="userSpaceOnUse"
               gradientTransform="translate(1.3680627e-7,-79.375004)" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient15315-5"
               id="radialGradient15736"
               cx="38.679722"
               cy="236.95551"
               fx="38.679722"
               fy="236.95551"
               r="12.541217"
               gradientTransform="matrix(5.7072155,0.26868388,-0.01027659,0.21828878,-179.63869,174.83816)"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient4614"
               id="radialGradient4616"
               cx="85.9496"
               cy="328.67267"
               fx="85.9496"
               fy="328.67267"
               r="79.375"
               gradientTransform="matrix(1.7919596,0.01649915,-8.0047577e-4,0.08693941,-62.780617,263.66084)"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient15315-5"
               id="radialGradient4634"
               cx="77.359444"
               cy="176.91103"
               fx="77.359444"
               fy="176.91103"
               r="25.082434"
               gradientTransform="matrix(1.3135871,-0.1191492,0.02348472,0.25891276,-28.413636,140.32382)"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient4664"
               id="radialGradient4666"
               cx="13.091763"
               cy="235.10512"
               fx="13.091763"
               fy="235.10512"
               r="16.501682"
               gradientTransform="matrix(2.2777563,-0.10674805,0.01546079,0.32989785,-20.362998,158.94195)"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5021"
               id="radialGradient5086"
               cx="77.261093"
               cy="169.72464"
               fx="77.261093"
               fy="169.72464"
               r="1.3028055"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5021"
               id="radialGradient5146"
               cx="77.261093"
               cy="169.72464"
               fx="77.261093"
               fy="169.72464"
               r="1.3028055"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5021"
               id="radialGradient5174"
               cx="77.261093"
               cy="169.72464"
               fx="77.261093"
               fy="169.72464"
               r="1.3027751"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5021"
               id="radialGradient5199"
               cx="77.261093"
               cy="169.72464"
               fx="77.261093"
               fy="169.72464"
               r="1.3028055"
               gradientUnits="userSpaceOnUse" />
            <radialGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5021"
               id="radialGradient5239"
               cx="101.47026"
               cy="169.59991"
               fx="101.47026"
               fy="169.59991"
               r="1.3028055"
               gradientUnits="userSpaceOnUse" />
            <linearGradient
               inkscape:collect="always"
               xlink:href="#linearGradient5259"
               id="linearGradient5265"
               x1="-3.1599205"
               y1="235.1051"
               x2="29.343447"
               y2="235.1051"
               gradientUnits="userSpaceOnUse" />
          </defs>
          <sodipodi:namedview
             id="base"
             pagecolor="#ffffff"
             bordercolor="#666666"
             borderopacity="1.0"
             inkscape:pageopacity="0.0"
             inkscape:pageshadow="2"
             inkscape:zoom="1"
             inkscape:cx="239.02174"
             inkscape:cy="369.94902"
             inkscape:document-units="px"
             inkscape:current-layer="layer1"
             showgrid="false"
             units="px"
             showguides="false"
             inkscape:window-width="1680"
             inkscape:window-height="987"
             inkscape:window-x="-8"
             inkscape:window-y="-8"
             inkscape:window-maximized="1" />
          <metadata
             id="metadata12921">
            <rdf:RDF>
              <cc:Work
                 rdf:about="">
                <dc:format>image/svg+xml</dc:format>
                <dc:type
                   rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                <dc:title></dc:title>
              </cc:Work>
            </rdf:RDF>
          </metadata>
          <g
             inkscape:label="Layer 1"
             inkscape:groupmode="layer"
             id="layer1"
             transform="translate(0,-164.70831)">
            <rect
               style="opacity:1;fill:url(#linearGradient15159);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:4.31061602;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
               id="keyboad-body"
               width="158.75"
               height="132.29167"
               x="0.26458335"
               y="164.44371"
               rx="0.26458335"
               ry="0.26458335"
               inkscape:export-xdpi="72"
               inkscape:export-ydpi="72" />
               
               
               <a href="http://geekgirljoy.wordpress.com" target="_blank" id="go-go-geekgirljoy">
            <g
               id="geekgirljoy-text">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 style="fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0.70712423;stroke-miterlimit:4;stroke-dasharray:none"
                 transform="matrix(1.1225043,0,0,1.1225043,5.0633408,-92.71991)"
                 id="geekgirljoy-bottom">
                <text
                   xml:space="preserve"
                   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.94135094px;line-height:1.54722679px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0.70712423;stroke-miterlimit:4;stroke-dasharray:none"
                   x="-3.5401669"
                   y="236.54588"
                   id="text5285"><tspan
                     sodipodi:role="line"
                     id="tspan15285-1"
                     x="-3.5401669"
                     y="236.54588"
                     style="fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0.70712423;stroke-miterlimit:4;stroke-dasharray:none">GeekGirlJoy</tspan></text>
                <text
                   id="text5283"
                   y="236.54588"
                   x="-3.5401669"
                   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.94135094px;line-height:1.54722679px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0.70712423;stroke-miterlimit:4;stroke-dasharray:none"
                   xml:space="preserve"><tspan
                     style="fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0.70712423;stroke-miterlimit:4;stroke-dasharray:none"
                     y="236.54588"
                     x="-3.5401669"
                     id="tspan15307-6"
                     sodipodi:role="line">GeekGirlJoy</tspan></text>
              </g>
              <g
                 id="geekgirljoy-top"
                 transform="matrix(1.1225043,0,0,1.1225043,5.0633408,-92.71991)"
                 style="opacity:0.97000002;fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                 inkscape:export-xdpi="72"
                 inkscape:export-ydpi="72">
                <text
                   id="text5247"
                   y="236.54588"
                   x="-3.5401669"
                   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.94135094px;line-height:1.54722679px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                   xml:space="preserve"><tspan
                     style="fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                     y="236.54588"
                     x="-3.5401669"
                     id="tspan5245"
                     sodipodi:role="line">GeekGirlJoy</tspan></text>
                <text
                   xml:space="preserve"
                   style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.94135094px;line-height:1.54722679px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                   x="-3.5401669"
                   y="236.54588"
                   id="text5251"><tspan
                     sodipodi:role="line"
                     id="tspan5249"
                     x="-3.5401669"
                     y="236.54588"
                     style="fill:url(#radialGradient4666);fill-opacity:1;stroke:#003380;stroke-width:0;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">GeekGirlJoy</tspan></text>
              </g>
            </g>
            </a>
            
            
            <rect
               ry="0.26458335"
               rx="0.26458335"
               y="283.19775"
               x="2.7755576e-017"
               height="13.802217"
               width="158.75"
               id="shading-bottom"
               style="opacity:1;fill:url(#radialGradient4616);fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.39234722;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
               inkscape:export-xdpi="72"
               inkscape:export-ydpi="72" />
            <rect
               style="opacity:0.95999995;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:#182943;stroke-width:4.23333339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
               id="keys-background"
               width="96.388542"
               height="95.16375"
               x="30.018394"
               y="189.01839"
               rx="0.26458332"
               ry="0.26458332"
               inkscape:export-xdpi="72"
               inkscape:export-ydpi="72" />
               
            <a href="#" id="Key-B">   
            <g
               id="white-key-b"
               transform="translate(0,-0.56104268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="b-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-80.626374,-672.05687)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="b-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="b-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="b-text"
                 y="276.75943"
                 x="117.51627"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="117.51627"
                   id="tspan4668-6-9"
                   sodipodi:role="line">B</tspan></text>
            </g>
            </a> 
            <g
               id="keyboard-text">
              <text
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="keyboard-bottom"
                 y="179.79259"
                 x="51.96806"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:11.88270187px;line-height:3.09445357px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#f9f9f9;fill-opacity:1;stroke:#000000;stroke-width:1;stroke-miterlimit:4;stroke-dasharray:none"
                 xml:space="preserve"><tspan
                   style="fill:#f9f9f9;stroke:#000000;stroke-width:1;stroke-miterlimit:4;stroke-dasharray:none"
                   y="179.79259"
                   x="51.96806"
                   id="tspan15285"
                   sodipodi:role="line">Keyboard</tspan></text>
              <text
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 xml:space="preserve"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:11.88270187px;line-height:3.09445357px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:url(#radialGradient4634);fill-opacity:1;stroke:none;stroke-width:0.12377814"
                 x="51.96806"
                 y="179.79259"
                 id="keyboard-top"><tspan
                   sodipodi:role="line"
                   id="tspan15307"
                   x="51.96806"
                   y="179.79259"
                   style="fill:url(#radialGradient4634);fill-opacity:1;stroke-width:0.12377814">Keyboard</tspan></text>
            </g>
            
            <a href="#" id="Key-C" name="Key-C"> 
            <g
               id="white-key-c">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-164.17119,-672.61793)"
                 id="c-rect-group">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.19712651;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="c-grey-rect"
                   width="3.9700837"
                   height="1.9451796"
                   x="59.26228"
                   y="289.87738"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="c-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="c-text"
                 y="276.7594"
                 x="33.866669"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.7594"
                   x="33.866669"
                   id="tspan4668"
                   sodipodi:role="line">C</tspan></text>
            </g>
            </a> 
            
            <a href="#" id="Key-D"> 
            <g
               id="white-key-d"
               transform="translate(0,-0.14374268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="d-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-150.17727,-672.47417)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="d-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="d-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="d-text"
                 y="276.75943"
                 x="47.997005"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="47.997005"
                   id="tspan4668-6"
                   sodipodi:role="line">D</tspan></text>
            </g>
            </a>
            
            
            <a href="#" id="Key-E"> 
            <g
               id="white-key-e"
               transform="translate(0,-0.19166268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="e-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-136.30317,-672.42625)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="e-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="e-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="e-text"
                 y="276.75943"
                 x="61.623047"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="61.623047"
                   id="tspan4668-6-7"
                   sodipodi:role="line">E</tspan></text>
            </g>
            </a>
            
            <a href="#" id="Key-F"> 
            <g
               id="white-key-f"
               transform="translate(0,-0.33544268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="f-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-122.30925,-672.28247)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="f-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="f-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="f-text"
                 y="276.75943"
                 x="75.976692"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="75.976692"
                   id="tspan4668-6-3"
                   sodipodi:role="line">F</tspan></text>
            </g>
            </a>
            
            <a href="#" id="Key-G"> 
            <g
               id="white-key-g"
               transform="translate(0,-0.36934268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="g-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-108.4944,-672.24857)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="g-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="g-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="g-text"
                 y="276.75943"
                 x="89.272003"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="89.272003"
                   id="tspan4668-6-73"
                   sodipodi:role="line">G</tspan></text>
            </g>
            </a>
            
            <a href="#" id="Key-A"> 
            <g
               id="white-key-a"
               transform="translate(0,-0.51312268)">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 id="a-rect-group"
                 transform="matrix(3.2767822,0,0,3.2767822,-94.50048,-672.10479)">
                <rect
                   style="opacity:1;fill:#cccccc;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1.20480227;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="a-grey-rect"
                   width="3.9700634"
                   height="1.970214"
                   x="59.26228"
                   y="289.85236"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="a-white-rect"
                   width="3.9781194"
                   height="27.495825"
                   x="59.26228"
                   y="262.95197"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="a-text"
                 y="276.75943"
                 x="104.02252"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;stroke-width:0.26458335"
                   y="276.75943"
                   x="104.02252"
                   id="tspan4668-6-6"
                   sodipodi:role="line">A</tspan></text>
            </g>
            </a>
            
            
            <a href="#" id="Key-C-Sharp"> 
            <g
               id="black-key-c-sharp">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-205.38614,-673.39341)"
                 id="c-sharp-rect-group">
                <rect
                   style="opacity:1;fill:#333333;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.79170525;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="c-sharp-grey-rect"
                   width="2.6989212"
                   height="1.2514575"
                   x="74.291664"
                   y="280.27954"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.66028059;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="c-sharp-black-rect"
                   width="2.6957428"
                   height="17.689808"
                   x="74.291664"
                   y="262.95673"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="c-sharp-text"
                 y="243.509"
                 x="38.438705"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;fill:#ffffff;stroke-width:0.26458335"
                   y="243.509"
                   x="38.438705"
                   id="tspan4668-2"
                   sodipodi:role="line">C#</tspan></text>
            </g>
            </a>
            
            
            <a href="#" id="Key-D-Sharp"> 
            <g
               id="black-key-d-sharp">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-189.99357,-673.39346)"
                 id="d-sharp-rect-group">
                <rect
                   style="opacity:1;fill:#333333;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.79805452;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="d-sharp-grey-rect"
                   width="2.6988971"
                   height="1.2716219"
                   x="74.291664"
                   y="280.25937"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.66028059;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="d-sharp-black-rect"
                   width="2.6957428"
                   height="17.689808"
                   x="74.291664"
                   y="262.95673"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="d-sharp-text"
                 y="243.509"
                 x="53.773075"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;fill:#ffffff;stroke-width:0.26458335"
                   y="243.509"
                   x="53.773075"
                   id="tspan4668-2-2"
                   sodipodi:role="line">D#</tspan></text>
            </g>
            </a>
            
            
            <a href="#" id="Key-F-Sharp"> 
            <g
               id="black-key-f-sharp">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-163.56119,-673.39346)"
                 id="f-sharp-rect-group">
                <rect
                   style="opacity:1;fill:#333333;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.79805452;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="f-sharp-grey-rect"
                   width="2.6988971"
                   height="1.2716219"
                   x="74.291664"
                   y="280.25937"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.66028059;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="f-sharp-black-rect"
                   width="2.6957428"
                   height="17.689808"
                   x="74.291664"
                   y="262.95673"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="f-sharp-text"
                 y="243.509"
                 x="80.059036"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;fill:#ffffff;stroke-width:0.26458335"
                   y="243.509"
                   x="80.059036"
                   id="tspan4668-2-1"
                   sodipodi:role="line">F#</tspan></text>
            </g>
            </a>
            
            
            
            <a href="#" id="Key-G-Sharp"> 
            <g
               id="black-key-g-sharp">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-148.92173,-673.39346)"
                 id="g-sharp-rect-group">
                <rect
                   style="opacity:1;fill:#333333;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.79805452;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="g-sharp-grey-rect"
                   width="2.6988971"
                   height="1.2716219"
                   x="74.291664"
                   y="280.25937"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.66028059;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="g-sharp-black-rect"
                   width="2.6957428"
                   height="17.689808"
                   x="74.291664"
                   y="262.95673"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="g-sharp-text"
                 y="243.10257"
                 x="94.651955"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;fill:#ffffff;stroke-width:0.26458335"
                   y="243.10257"
                   x="94.651955"
                   id="tspan4668-2-4"
                   sodipodi:role="line">G#</tspan></text>
            </g>
            </a>
            
            
            
            <a href="#" id="Key-A-Sharp"> 
            <g
               id="black-key-a-sharp">
              <g
                 inkscape:export-ydpi="72"
                 inkscape:export-xdpi="72"
                 transform="matrix(3.2767822,0,0,3.2767822,-133.19786,-673.39346)"
                 id="a-sharp-rect-group">
                <rect
                   style="opacity:1;fill:#333333;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.79805452;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="a-sharp-grey-rect"
                   width="2.6988971"
                   height="1.2716219"
                   x="74.291664"
                   y="280.25937"
                   rx="0.08074487"
                   ry="0.08074487" />
                <rect
                   style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:0.66028059;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
                   id="a-sharp-black-rect"
                   width="2.6957428"
                   height="17.689808"
                   x="74.291664"
                   y="262.95673"
                   rx="0.08074487"
                   ry="0.08074487" />
              </g>
              <text
                 id="a-sharp-text"
                 y="243.509"
                 x="110.64803"
                 style="font-style:normal;font-variant:normal;font-weight:normal;font-stretch:normal;font-size:5.64444447px;line-height:6.61458349px;font-family:Pacifico;-inkscape-font-specification:Pacifico;font-variant-ligatures:normal;font-variant-caps:normal;font-variant-numeric:normal;font-feature-settings:normal;text-align:start;letter-spacing:0px;word-spacing:0px;writing-mode:lr-tb;text-anchor:start;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.26458335;enable-background:new"
                 xml:space="preserve"><tspan
                   style="font-size:5.64444447px;fill:#ffffff;stroke-width:0.26458335"
                   y="243.509"
                   x="110.64803"
                   id="tspan4668-2-5"
                   sodipodi:role="line">A#</tspan></text>
            </g>
            </a>
            
            
            
            
            <path
               d="m 78.034761,170.34857 -0.718473,-0.10878 -0.67912,0.25852 0.10877,-0.71847 -0.258513,-0.67913 0.718473,0.10878 0.679121,-0.25852 -0.108771,0.71847 z"
               inkscape:randomized="0"
               inkscape:rounded="0"
               inkscape:flatsided="false"
               sodipodi:arg2="1.4640607"
               sodipodi:arg1="0.67866249"
               sodipodi:r2="0.51810318"
               sodipodi:r1="0.99390382"
               sodipodi:cy="169.72464"
               sodipodi:cx="77.261093"
               sodipodi:sides="4"
               id="flare-1"
               style="opacity:0.644;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:url(#radialGradient5174);stroke-width:1.0582726;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill;enable-background:new"
               sodipodi:type="star"
               transform="matrix(2.1681284,0,0,0.50590109,-110.80528,84.48127)" />
            <path
               d="m 78.034761,170.34857 -0.718473,-0.10878 -0.67912,0.25852 0.10877,-0.71847 -0.258513,-0.67913 0.718473,0.10878 0.679121,-0.25852 -0.108771,0.71847 z"
               inkscape:randomized="0"
               inkscape:rounded="0"
               inkscape:flatsided="false"
               sodipodi:arg2="1.4640607"
               sodipodi:arg1="0.67866249"
               sodipodi:r2="0.51810318"
               sodipodi:r1="0.99390382"
               sodipodi:cy="169.72464"
               sodipodi:cx="77.261093"
               sodipodi:sides="4"
               id="flare-2"
               style="opacity:0.644;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:url(#radialGradient5146);stroke-width:1.0583334;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill;enable-background:new"
               sodipodi:type="star"
               transform="matrix(1,0,0,0.68256474,-14.497777,54.437717)" />
            <path
               d="m 78.034761,170.34857 -0.718473,-0.10878 -0.67912,0.25852 0.10877,-0.71847 -0.258513,-0.67913 0.718473,0.10878 0.679121,-0.25852 -0.108771,0.71847 z"
               inkscape:randomized="0"
               inkscape:rounded="0"
               inkscape:flatsided="false"
               sodipodi:arg2="1.4640607"
               sodipodi:arg1="0.67866249"
               sodipodi:r2="0.51810318"
               sodipodi:r1="0.99390382"
               sodipodi:cy="169.72464"
               sodipodi:cx="77.261093"
               sodipodi:sides="4"
               id="flare-3"
               style="opacity:0.644;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:url(#radialGradient5199);stroke-width:1.0583334;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill;enable-background:new"
               sodipodi:type="star"
               transform="matrix(1,0,0,0.68256474,-8.203631,68.866748)" />
            <path
               d="m 78.034761,170.34857 -0.718473,-0.10878 -0.67912,0.25852 0.10877,-0.71847 -0.258513,-0.67913 0.718473,0.10878 0.679121,-0.25852 -0.108771,0.71847 z"
               inkscape:randomized="0"
               inkscape:rounded="0"
               inkscape:flatsided="false"
               sodipodi:arg2="1.4640607"
               sodipodi:arg1="0.67866249"
               sodipodi:r2="0.51810318"
               sodipodi:r1="0.99390382"
               sodipodi:cy="169.72464"
               sodipodi:cx="77.261093"
               sodipodi:sides="4"
               id="flare-4"
               style="opacity:0.644;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:url(#radialGradient5086);stroke-width:1.0583334;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
               sodipodi:type="star"
               transform="matrix(1,0,0,0.68256474,0,53.630995)" />
            <path
               sodipodi:type="star"
               style="opacity:0.644;fill:none;fill-opacity:1;fill-rule:nonzero;stroke:url(#radialGradient5239);stroke-width:1.0583334;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:markers stroke fill"
               id="flare-5"
               sodipodi:sides="4"
               sodipodi:cx="101.47026"
               sodipodi:cy="169.59991"
               sodipodi:r1="0.99390382"
               sodipodi:r2="0.51810318"
               sodipodi:arg1="0.67866249"
               sodipodi:arg2="1.4640607"
               inkscape:flatsided="false"
               inkscape:rounded="0"
               inkscape:randomized="0"
               d="m 102.24393,170.22384 -0.71847,-0.10877 -0.67912,0.25851 0.10877,-0.71847 -0.25852,-0.67912 0.71848,0.10877 0.67912,-0.25851 -0.10877,0.71847 z"
               transform="matrix(1,0,0,0.74845571,0,42.467279)" />
          </g>
        </svg>

            
        <?php } elseif($method == "png"){ ?>
            
            <img src="keyboard.png" align="middle" usemap="#keyboardmap">

                <map name="keyboardmap">
                  <area id="go-go-geekgirljoy" alt="go-go-geekgirljoy" title="go-go-geekgirljoy" shape="rect" coords="0,0,148,48" target="_blank" href="http://geekgirljoy.wordpress.com" >
                  <area id="Key-C" alt="" title="" href="#" shape="poly" target="_self" coords="115,93,115,433,163,433,164,319,145,318,145,93" />
                  <area id="Key-D" alt="" title="" href="#" shape="poly" target="_self" coords="178,93,179,319,167,319,167,433,217,433,217,319,202,319,203,93" />
                  <area id="Key-E" alt="" title="" href="#" shape="poly" target="_self" coords="236,93,236,319,219,319,220,434,269,434,268,93" />
                  <area id="Key-F" alt="" title="" href="#" shape="poly" target="_self" coords="272,93,272,434,322,434,322,320,303,320,302,93" />
                  <area id="Key-G" alt="" title="" href="#" shape="poly" target="_self" coords="336,93,336,320,324,321,324,434,374,434,374,320,357,319,358,93" />
                  <area id="Key-A" alt="" title="" href="#" shape="poly" target="_self" coords="392,93,392,319,378,319,378,433,428,433,427,319,418,319,418,93" />
                  <area id="Key-B" alt="" title="" href="#" shape="poly" target="_self" coords="451,93,451,319,430,320,430,433,479,433,479,93" />
                  <area id="Key-C-Sharp" alt="" title="" href="#" shape="poly" target="_self" coords="146,93,146,308,178,308,178,93" />
                  <area id="Key-D-Sharp" alt="" title="" href="#" shape="poly" target="_self" coords="204,92,204,308,236,308,236,93" />
                  <area id="Key-F-Sharp" alt="" title="" href="#" shape="poly" target="_self" coords="304,93,304,308,336,308,336,93" />
                  <area id="Key-G-Sharp" alt="" title="" href="#" shape="poly" target="_self" coords="360,92,359,308,392,308,391,93" />
                  <area id="Key-A-Sharp" alt="" title="" href="#" shape="poly" target="_self" coords="419,93,420,309,451,308,450,93" />
                </map>
        <?php } ?>

        </div>


        <script>
          document.getElementById("Key-C").addEventListener("click", function () {document.getElementById("C-Audio").play(); });
          document.getElementById("Key-D").addEventListener("click", function () {document.getElementById("D-Audio").play(); });
          document.getElementById("Key-E").addEventListener("click", function () {document.getElementById("E-Audio").play(); });
          document.getElementById("Key-F").addEventListener("click", function () {document.getElementById("F-Audio").play(); });
          document.getElementById("Key-G").addEventListener("click", function () {document.getElementById("G-Audio").play(); });
          document.getElementById("Key-A").addEventListener("click", function () {document.getElementById("A-Audio").play(); });
          document.getElementById("Key-B").addEventListener("click", function () {document.getElementById("B-Audio").play(); });
          document.getElementById("Key-C-Sharp").addEventListener("click", function () {document.getElementById("C-Sharp-Audio").play(); });
          document.getElementById("Key-D-Sharp").addEventListener("click", function () {document.getElementById("D-Sharp-Audio").play(); });
          document.getElementById("Key-F-Sharp").addEventListener("click", function () {document.getElementById("F-Sharp-Audio").play(); });
          document.getElementById("Key-G-Sharp").addEventListener("click", function () {document.getElementById("G-Sharp-Audio").play(); });
          document.getElementById("Key-A-Sharp").addEventListener("click", function () {document.getElementById("A-Sharp-Audio").play(); });
        </script>


    </body>
</html>
