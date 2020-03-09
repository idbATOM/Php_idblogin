<?php
# * ********************************************************************* *
# *                                                                       *
# *   Login for IDB portals                                               *
# *   This file is part of idblogin. This project may be found at:        *
# *   https://github.com/IdentityBank/Php_idblogin.                       *
# *                                                                       *
# *   Copyright (C) 2020 by Identity Bank. All Rights Reserved.           *
# *   https://www.identitybank.eu - You belong to you                     *
# *                                                                       *
# *   This program is free software: you can redistribute it and/or       *
# *   modify it under the terms of the GNU Affero General Public          *
# *   License as published by the Free Software Foundation, either        *
# *   version 3 of the License, or (at your option) any later version.    *
# *                                                                       *
# *   This program is distributed in the hope that it will be useful,     *
# *   but WITHOUT ANY WARRANTY; without even the implied warranty of      *
# *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the        *
# *   GNU Affero General Public License for more details.                 *
# *                                                                       *
# *   You should have received a copy of the GNU Affero General Public    *
# *   License along with this program. If not, see                        *
# *   https://www.gnu.org/licenses/.                                      *
# *                                                                       *
# * ********************************************************************* *

################################################################################
# Namespace                                                                    #
################################################################################

namespace app\assets;

################################################################################
# Use(s)                                                                       #
################################################################################

################################################################################
# Class(es)                                                                    #
################################################################################

class FormAsset extends AppAsset
{

    public $sourcePath = '@app/views/assets';
    public $js =
        [
            'jquery.inputmask.bundle.js',
        ];
    public $depends =
        [
            'yii\web\YiiAsset',
        ];
}

################################################################################
#                                End of file                                   #
################################################################################
