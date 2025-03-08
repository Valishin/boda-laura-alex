<?php

    $label = get_field('theme-settings-social__label', 'option');
    $socials = get_field('theme-settings-social__socials', 'option');
    $width = 20;
    if(!!$socials){
        ?>
            <?php if(!!$label){ ?>            
                <div class="b-socials__label o-font-display-button">
                    <?php echo $label; ?>
                </div>
            <?php } ?>
            <div class="b-socials">
                <?php
                    foreach ($socials as $key => $social) {
                        $social = $social['social'];
                        ?>
                            <a class="b-socials__item-icon" href="<?php echo $social['url']; ?>" target="<?php echo $social['target']; ?>">
                                <?php
                                    $current_str = strtolower($social['title']);
                                    if($current_str=='facebook'){
                                        ?>
                                            <svg width="10px" height="20px" viewBox="0 0 10 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1169.000000, -20135.000000)" fill="#000000">
                                                        <g transform="translate(50.000000, 19702.000000)">
                                                            <path d="M1129,436.196534 L1127.18751,436.197737 C1125.76616,436.197737 1125.49055,436.872909 1125.49055,437.863401 L1125.49055,440.048983 L1128.88085,440.048983 L1128.43916,443.472981 L1125.49055,443.472981 L1125.49055,452.256228 L1121.95583,452.256228 L1121.95583,443.472981 L1119,443.472981 L1119,440.048983 L1121.95583,440.048983 L1121.95583,437.525214 C1121.95583,434.594656 1123.74546,433 1126.35829,433 C1127.60994,433 1128.68588,433.092671 1129,433.134794 L1129,436.196534 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        <?php
                                    }else if($current_str=='twitter'){
                                        ?>                                    
                                            <svg width="<?php echo $width; ?>" height="<?php echo $width; ?>" viewBox="0 0 16 16"><path fill="currentColor" d="M9.294 6.928L14.357 1h-1.2L8.762 6.147L5.25 1H1.2l5.31 7.784L1.2 15h1.2l4.642-5.436L10.751 15h4.05zM7.651 8.852l-.538-.775L2.832 1.91h1.843l3.454 4.977l.538.775l4.491 6.47h-1.843z"/></svg>
                                        <?php
                                    }else if($current_str=='youtube'){
                                        ?>
                                            <svg width="22px" height="16px" viewBox="0 0 22 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1311.000000, -20138.000000)" fill="#000000">
                                                        <g transform="translate(50.000000, 19702.000000)">
                                                            <path d="M1275.26388,443.875601 L1269.52674,446.967785 L1269.52674,442.208374 L1269.52674,440.759623 L1272.12519,442.174305 L1275.26388,443.875601 Z M1282.11557,439.6905 C1282.11557,439.6905 1281.89818,438.161713 1281.26492,437.49493 C1280.46024,436.621029 1279.55227,436.609131 1279.14993,436.551809 C1276.18321,436.333333 1271.73475,436.333333 1271.73475,436.333333 L1271.71095,436.333333 C1271.71095,436.333333 1267.27385,436.333333 1264.30658,436.551809 C1263.88207,436.609131 1262.98492,436.621029 1262.18078,437.49493 C1261.54806,438.161713 1261.33013,439.6905 1261.33013,439.6905 C1261.33013,439.6905 1261.11111,441.484269 1261.11111,443.254785 L1261.11111,443.484617 L1261.11111,444.944184 C1261.11111,446.737412 1261.33013,448.50901 1261.33013,448.50901 C1261.33013,448.50901 1261.54806,450.037797 1262.18078,450.715936 C1262.98492,451.601194 1264.04322,451.566584 1264.52614,451.658516 C1266.21608,451.831025 1271.73475,451.888889 1271.73475,451.888889 C1271.73475,451.888889 1276.18321,451.865635 1279.14993,451.658516 C1279.55227,451.601194 1280.46024,451.601194 1281.26492,450.715936 C1281.89818,450.037797 1282.11557,448.50901 1282.11557,448.50901 C1282.11557,448.50901 1282.32269,446.737412 1282.32269,444.944184 L1282.32269,443.576549 L1282.32269,443.254785 C1282.32269,441.484269 1282.11557,439.6905 1282.11557,439.6905 L1282.11557,439.6905 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        <?php
                                    }else if($current_str=='vimeo'){
                                        ?>
                                            <svg width="<?php echo $width; ?>" height="<?php echo $width; ?>" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor">
                                                <path d="M22.875 10.063c-2.442 5.217-8.337 12.319-12.063 12.319-3.672 0-4.203-7.831-6.208-13.043-.987-2.565-1.624-1.976-3.474-.681l-1.128-1.455c2.698-2.372 5.398-5.127 7.057-5.28 1.868-.179 3.018 1.098 3.448 3.832.568 3.593 1.362 9.17 2.748 9.17 1.08 0 3.741-4.424 3.878-6.006.243-2.316-1.703-2.386-3.392-1.663 2.673-8.754 13.793-7.142 9.134 2.807z"/>
                                            </svg>
                                        <?php
                                    }else if($current_str=='instagram'){
                                        ?>
                                            <svg width="19px" height="18px" viewBox="0 0 19 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1211.000000, -20136.000000)" fill="#000000">
                                                        <g transform="translate(50.000000, 19702.000000)">
                                                            <path d="M1170.44444,445.962783 C1168.80825,445.962783 1167.48148,444.636466 1167.48148,442.99982 C1167.48148,441.363174 1168.80825,440.036857 1170.44444,440.036857 C1172.08109,440.036857 1173.40741,441.363174 1173.40741,442.99982 C1173.40741,444.636466 1172.08109,445.962783 1170.44444,445.962783 M1169.43663,434.111969 L1171.45242,434.111969 C1172.97209,434.115141 1173.31309,434.127986 1174.10947,434.164632 C1175.0553,434.207808 1175.70159,434.358025 1176.26693,434.577953 C1176.8516,434.804628 1177.34723,435.10866 1177.84151,435.602937 C1178.33533,436.097214 1178.63937,436.59284 1178.86694,437.177067 C1179.08642,437.742855 1179.23664,438.389147 1179.27981,439.334975 C1179.31781,440.169282 1179.33038,440.503796 1179.33285,442.217321 L1179.33285,443.782553 C1179.33038,445.495849 1179.31781,445.830664 1179.27981,446.664575 C1179.23664,447.610853 1179.08642,448.256696 1178.86694,448.822483 C1178.63937,449.40716 1178.33533,449.902336 1177.84151,450.396613 C1177.34723,450.89134 1176.8516,451.194922 1176.26693,451.422047 C1175.70159,451.641975 1175.0553,451.792192 1174.10947,451.834919 C1173.23724,451.875055 1172.91127,451.88664 1170.98474,451.888237 L1169.90424,451.888237 C1167.978,451.88664 1167.65169,451.875055 1166.77987,451.834919 C1165.83359,451.792192 1165.1873,451.641975 1164.62196,451.422047 C1164.03728,451.194922 1163.54166,450.89134 1163.04783,450.396613 C1162.55355,449.902336 1162.24952,449.40716 1162.0224,448.822483 C1161.80247,448.256696 1161.65225,447.610853 1161.60908,446.664575 C1161.57281,445.868569 1161.55971,445.527318 1161.55644,444.007817 L1161.55644,441.992029 C1161.55971,440.472353 1161.57281,440.131359 1161.60908,439.334975 C1161.65225,438.389147 1161.80247,437.742855 1162.0224,437.177067 C1162.24952,436.59284 1162.55355,436.097214 1163.04783,435.602937 C1163.54166,435.10866 1164.03728,434.804628 1164.62196,434.577953 C1165.1873,434.358025 1165.83359,434.207808 1166.77987,434.164632 C1167.57588,434.127986 1167.91713,434.115141 1169.43663,434.111969 L1171.45242,434.111969 Z M1171.21321,435.713108 L1169.67568,435.713108 C1167.99419,435.715321 1167.67754,435.726798 1166.85273,435.764398 C1165.98606,435.803976 1165.51562,435.948796 1165.20214,436.070229 C1164.78702,436.231689 1164.49108,436.424633 1164.18031,436.735411 C1163.86908,437.046639 1163.67658,437.342576 1163.51512,437.757247 C1163.39369,438.070723 1163.24842,438.541613 1163.20929,439.407835 C1163.1713,440.232643 1163.15977,440.5493 1163.15755,442.23109 L1163.15755,443.768766 C1163.15977,445.450251 1163.1713,445.766907 1163.20929,446.591716 C1163.24842,447.458387 1163.39369,447.929277 1163.51512,448.242304 C1163.67658,448.656975 1163.86908,448.953361 1164.18031,449.264139 C1164.49108,449.575367 1164.78702,449.768311 1165.20214,449.929322 C1165.51562,450.050754 1165.98606,450.196024 1166.85273,450.235602 C1167.71503,450.274497 1168.02193,450.285602 1169.91361,450.28713 L1170.97538,450.28713 C1172.8674,450.285602 1173.17427,450.274497 1174.03616,450.235602 C1174.90328,450.196024 1175.37372,450.050754 1175.68675,449.929322 C1176.10187,449.768311 1176.39781,449.575367 1176.70903,449.264139 C1177.02026,448.953361 1177.21275,448.656975 1177.37377,448.242304 C1177.49565,447.929277 1177.64047,447.458387 1177.68005,446.591716 C1177.71936,445.729416 1177.73011,445.422513 1177.73158,443.530837 L1177.73158,442.469063 C1177.73011,440.577037 1177.71936,440.270134 1177.68005,439.407835 C1177.64047,438.541613 1177.49565,438.070723 1177.37377,437.757247 C1177.21275,437.342576 1177.02026,437.046639 1176.70903,436.735411 C1176.39781,436.424633 1176.10187,436.231689 1175.68675,436.070229 C1175.37372,435.948796 1174.90328,435.803976 1174.03616,435.764398 C1173.21135,435.726798 1172.8947,435.715321 1171.21321,435.713108 Z M1170.44444,438.435292 C1172.9653,438.435292 1175.00897,440.478963 1175.00897,442.99982 C1175.00897,445.521127 1172.9653,447.564798 1170.44444,447.564798 C1167.92359,447.564798 1165.87992,445.521127 1165.87992,442.99982 C1165.87992,440.478963 1167.92359,438.435292 1170.44444,438.435292 Z M1175.18928,437.188266 C1175.77845,437.188266 1176.25609,437.665902 1176.25609,438.255077 C1176.25609,438.844251 1175.77845,439.321887 1175.18928,439.321887 C1174.6001,439.321887 1174.12292,438.844251 1174.12292,438.255077 C1174.12292,437.665902 1174.6001,437.188266 1175.18928,437.188266 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>                                        
                                        <?php
                                    }else if($current_str=='linkedin'){
                                        ?>
                                            <svg width="18px" height="17px" viewBox="0 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1261.000000, -20136.000000)" fill="#000000">
                                                        <g transform="translate(50.000000, 19702.000000)">
                                                            <path d="M1215.65888,439.666409 L1215.65888,450.777778 L1212.21929,450.777778 L1212.21929,439.666409 L1215.65888,439.666409 Z M1224.50499,439.327178 C1226.86109,439.327178 1228.54808,440.76621 1228.54808,443.742684 L1228.54808,443.742684 L1228.54808,450.777681 L1225.12489,450.777681 L1225.12489,444.945334 C1225.12489,443.34566 1224.51705,442.452718 1223.25265,442.452718 C1221.87585,442.452718 1221.15658,443.382806 1221.15658,444.945334 L1221.15658,444.945334 L1221.15658,450.777681 L1217.85737,450.777681 L1217.85737,439.666795 L1221.15658,439.666795 L1221.15658,441.163234 C1221.15658,441.163234 1222.1489,439.327178 1224.50499,439.327178 Z M1213.92273,434.111111 C1215.04627,434.111111 1215.95658,435.028656 1215.95658,436.160875 C1215.95658,437.29261 1215.04627,438.211603 1213.92273,438.211603 C1212.7992,438.211603 1211.88889,437.29261 1211.88889,436.160875 C1211.88889,435.028656 1212.7992,434.111111 1213.92273,434.111111 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        <?php
                                    }else if($current_str=='tripadvisor'){
                                        ?>
                                            <svg width="25px" height="16px" viewBox="0 0 25 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-1364.000000, -20138.000000)" fill="#000000">
                                                        <g transform="translate(50.000000, 19702.000000)">
                                                            <path d="M1337.02546,440.864001 L1339.00575,438.709682 L1334.6144,438.709682 C1332.41602,437.20791 1329.76103,436.333333 1326.88992,436.333333 C1324.02225,436.333333 1321.37464,437.209879 1319.17995,438.709682 L1314.77778,438.709682 L1316.75782,440.864001 C1315.54405,441.971438 1314.78319,443.566747 1314.78319,445.337808 C1314.78319,448.680302 1317.49308,451.390186 1320.83557,451.390186 C1322.4235,451.390186 1323.86988,450.77776 1324.94975,449.776661 L1326.88967,451.888889 L1328.82959,449.778631 C1329.90946,450.779729 1331.35437,451.390186 1332.94205,451.390186 C1336.28454,451.390186 1338.99812,448.680302 1338.99812,445.337808 C1338.99984,443.564777 1338.23899,441.969715 1337.02521,440.864001 L1337.02546,440.864001 Z M1320.83729,449.433772 C1318.57467,449.433772 1316.74133,447.600434 1316.74133,445.337808 C1316.74133,443.075182 1318.57491,441.241844 1320.83729,441.241844 C1323.09992,441.241844 1324.93326,443.075428 1324.93326,445.337808 C1324.93326,447.600188 1323.09967,449.433772 1320.83729,449.433772 Z M1326.89164,445.218671 C1326.89164,442.52331 1324.93153,440.209484 1322.34448,439.221185 C1323.74361,438.636328 1325.27812,438.311901 1326.88992,438.311901 C1328.50147,438.311901 1330.03795,438.636328 1331.43708,439.221185 C1328.85199,440.211453 1326.89189,442.52331 1326.89189,445.218671 L1326.89164,445.218671 Z M1332.94402,449.433772 C1330.68139,449.433772 1328.84805,447.600434 1328.84805,445.337808 C1328.84805,443.075182 1330.68164,441.241844 1332.94402,441.241844 C1335.20664,441.241844 1337.03998,443.075428 1337.03998,445.337808 C1337.03998,447.600188 1335.2064,449.433772 1332.94402,449.433772 Z M1332.94402,443.188904 C1331.75757,443.188904 1330.79684,444.149634 1330.79684,445.336085 C1330.79684,446.52229 1331.75757,447.48302 1332.94402,447.48302 C1334.13022,447.48302 1335.09095,446.52229 1335.09095,445.336085 C1335.09095,444.151603 1334.13022,443.188904 1332.94402,443.188904 Z M1322.98447,445.337808 C1322.98447,446.524013 1322.02374,447.484743 1320.83729,447.484743 C1319.65109,447.484743 1318.69036,446.524013 1318.69036,445.337808 C1318.69036,444.151357 1319.65109,443.190625 1320.83729,443.190625 C1322.0235,443.188904 1322.98447,444.151357 1322.98447,445.337808 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        <?php
                                    }else if($current_str=='whatsapp'){
                                        ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                            </svg>
                                        <?php
                                    }
                                ?>
                            </a>
                        <?php
                    }
                ?>
            </div>
        <?php
    }

?>