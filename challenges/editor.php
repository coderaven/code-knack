            <div class="fb-like" data-href="http://localhost/codeknack/challenges/?p=<?php echo $p ?>" data-send="true" data-show-faces="true"></div>

            <div class="code-pad">
            <div class="editor-wrapper">
                <div id="editor"></div>
            </div>
            <form id="code" action="#" method="post">
              <label for="theme"><b>Editor Theme: </b></label>
              <select id="theme">
                <option value="textmate">Textmate</option>
                <option value="twilight">Twilight</option>
                <option value="cobalt" selected="selected">Cobalt</option>
                <option value="chrome">Chrome</option>
                <option value="dawn">Dawn</option>
                <option value="tomorrow">Tomorrow</option>
                <option value="solarized_dark">Solarized</option>
                <option value="eclipse">Eclipse</option>
                <option value="merbivore">Merbivore</option>
                <option value="ambiance">Ambiance</option>
                <option value="clouds">Clouds</option>
                <option value="clouds_midnight">Clouds Midnight</option>
                <option value="xcode">Xcode</option>
                <option value="twilight">Twilight</option>
                <option value="vibrant_ink">Vibrant Ink</option>
              </select>

              <label for="lang"><b>Language: </b></label>
              <select id="lang" name="lang">
                <option value="11" selected="selected">C</option>
                <option value="44">C++</option>
                <option value="10">Java</option>
                <option value="112">Javascript</option>
                <option value="17">Ruby</option>
                <option value="116">Python</option>
                <option value="29">PHP</option>
              </select>

              <input type="hidden" name="inputs" id="inputs" value="10"> <!--- Dummy Value For Testing purposes -->
              <input type="hidden" name="source" id="source" value="">

              <button type="submit">Compile</button> 
            </form>

            <div id="response">
                <div class="meta"></div>
                <div class="output">
                  <strong>Output</strong>: <br><br><pre></pre>
                </div>
            </div>

          </div> <!--- End Code Pad Wrapper -->

          <div class="fb-comments" data-href="http://localhost/codeknack/challenges/?p=<?php echo $p ?>" data-num-posts="9" ></div>